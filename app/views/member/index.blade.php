@extends('member.layouts.default')
@section('meta')
<title>{{$user->email}} - {{Lang::get('profilepage.private_cab')}}</title>
@stop

@section('content')
<h2>{{Lang::get('profilepage.welcome')}} {{$user->email}}!<br>{{Lang::get('profilepage.use_menu')}}</h2>

@stop