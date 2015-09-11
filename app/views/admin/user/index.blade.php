@extends('admin.layouts.default')
@section('content')
<h4>Пользователи</h4>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Имя, Фамилия</th>
            <th>Формы</th>
        </tr>    
    </thead>
    <tbody>
        @foreach($users as $user)
        @if($user->roles()->get()[0]->name!='admin')
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->email}}</td>
            <td>
                @if (isset($user->person->name))
                {{$user->person->name}}
                @endif
                @if (isset($user->person->surname))
                {{$user->person->surname}}
                @endif
            </td>
            <td>
                @if (count($user->form)==0)
                Нет форм
                @else
                <a href="/admin/users/{{$user->id}}/forms" class="btn btn-primary btn-xs">Посмотреть {{count($user->form)}} форм</a>
                @endif
            </td>
        </tr>
        @endif
        @endforeach
    </tbody>
</table>
@stop