@extends('newmember.layouts.default')
@section('content')
<div class="content-row">
  <div class="grid full-width">
    <span class="grid__title">Email {{$user->email}} успешно подтвержден.</span>
    <span class="grid__title"> Перейдите в <a href="/profile" class="grid__link">личный кабинет</a>, чтобы продолжить</span>
  </div>
</div>
@stop
