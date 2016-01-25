@extends('admin.layouts.default')
@section('content')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="text-success"><strong>:message</strong></span></div>')}}
<h4>Редактор работ</h4>
<a href="/admin/workedit/create" class="btn btn-primary">Создать Работу</a>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Рабочая группа</th>
      <th>Действия</th>
    </tr>
  </thead>
  <tbody>
    @foreach($works as $work)
    <tr>
      <td>{{$work->id}}</td>
      <td>{{$work->name}}</td>
      <td>
      @foreach($groups as $workgroup)
          @if($work->workgroup_id == $workgroup->id)
          {{$workgroup->name}}
          @endif
      @endforeach
      </td>
      <td>
        {{Form::open(['method'=>'DELETE', 'url'=>'/admin/workedit/'.$work->id, 'class'=>'form-inline'])}}
        <button type="submit" class="btn btn-danger btn-xs">Удалить</button>
        {{Form::close()}}
        {{Form::open(['method'=>'POST', 'url'=>'/admin/workedit/edit/'.$work->id, 'class'=>'form-inline'])}}
        <button type="submit" class="btn btn-danger btn-xs">Редактировать</button>
        {{Form::close()}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
