@extends('member.layouts.default')
@section('meta')
<title>Страница форм</title>
@stop
@section('content')
<h2>Вы еще не создавали формы, можете создать новую</h2>
<div class="input-wrapper">
    <a href="{{$url}}" class="evth-btn"><i class="fa fa-plus-circle"></i> Создать форму</a>
</div>
@stop

