@extends('newmember.layouts.default')
@section('content')
<div class="content-row">
  <div class="grid full-width">
    <span class="grid__title">Email {{$user->email}} {{Lang::get('profilepage.suc_confirmed')}}</span>
    <span class="grid__title"> {{Lang::get('profilepage.go_on')}} <a href="/profile" class="grid__link">{{Lang::get('profilepage.private_cabinet')}}</a>, {{Lang::get('profilepage.to_continue')}}</span>
  </div>
</div>
@stop
