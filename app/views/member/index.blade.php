@extends('member.layouts.default')
@section('meta')
<title>{{$user->email}} - Личный кабинет</title>
@stop

@section('content')
<h2>Добро пожаловать, {{$user->email}}!<br>Воспользуйтесь меню для перехода на нужную страницу.</h2>

@stop