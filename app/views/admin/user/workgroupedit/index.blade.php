@extends('admin.layouts.default')
@section('content')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="text-success"><strong>:message</strong></span></div>')}}
<h4>Рабочие группы</h4>
<a href="/admin/workgroupedit/create" class="btn btn-primary">Создать Группу</a>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Icon</th>
      <th>Действия</th>
    </tr>
  </thead>
  <tbody>
    @foreach($groups as $workgroup)
    <tr>
      <td>{{$workgroup->id}}</td>
      <td>{{$workgroup->name}}</td>
      <td>{{$workgroup->icon}}</td>
      <td>
        {{Form::open(['method'=>'DELETE', 'url'=>'/admin/workgroupedit/'.$workgroup->id, 'class'=>'form-inline'])}}
        <button type="submit" class="btn btn-danger btn-xs">Удалить</button>
        {{Form::close()}}
      
        {{Form::open(['method'=>'POST', 'url'=>'/admin/workgroupedit/edit/'.$workgroup->id, 'class'=>'form-inline'])}}
        <button type="submit" class="btn btn-danger btn-xs">Редактировать</button>
        {{Form::close()}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
