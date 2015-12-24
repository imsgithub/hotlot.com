@extends('admin.layouts.default')
@section('content')
<h4>Создать нового</h4>
{{Form::open(['method'=>'POST', 'url'=>'/admin/miniadmin'])}}
<input style="display:none">
<input type="password" style="display:none">
<div class="clearfix">
  <div class="form-group col-md-6 ">
    {{Form::text('email', '', ['class'=>"form-control", 'placeholder'=>"Email"])}}
    {{$errors->first('email', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-6 ">
    {{Form::text('password', '', ['class'=>"form-control", 'placeholder'=>"Пароль"])}}
    {{$errors->first('password', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-6 ">
    <button type="submit" class="btn btn-primary">Создать</button>
  </div>
</div>
{{Form::close()}}
@stop
