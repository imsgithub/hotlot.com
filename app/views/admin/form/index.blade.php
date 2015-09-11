@extends('admin.layouts.default')
@section('content')
<h4>Формы пользователя {{$user->email}}</h4>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Дата создания</th>
            <th>Наименование груза</th>
            <th>Действия</th>
        </tr>    
    </thead>
    <tbody>
        @foreach($forms as $form)
        <tr>
            <td>{{$form->id}}</td>
            <td>{{$form->created_at}}</td>
            <td>{{$form->cargo_name}}</td>
            <td><a href="/admin/users/{{$user->id}}/forms/{{$form->id}}" class="btn btn-primary btn-xs">Посмотреть</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@stop