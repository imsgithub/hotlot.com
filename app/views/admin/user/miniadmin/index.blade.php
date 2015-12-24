@extends('admin.layouts.default')
@section('content')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="text-success"><strong>:message</strong></span></div>')}}
<h4>Суперпользователи</h4>
<a href="/admin/miniadmin/create" class="btn btn-primary">Создать нового</a>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Id</th>
      <th>Email</th>
      <th>Действия</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <td>{{$user->id}}</td>
      <td>{{$user->email}}</td>
      <td>
        {{Form::open(['method'=>'DELETE', 'url'=>'/admin/miniadmin/'.$user->id])}}
        <button type="submit" class="btn btn-danger btn-xs">Удалить</button>
        {{Form::close()}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
