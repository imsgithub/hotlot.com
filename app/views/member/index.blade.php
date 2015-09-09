@extends('member.layouts.default')
@section('meta')
<title>{{$user->email}} - Личный кабинет</title>
@stop

@section('content')

{{$user}}

@stop