@extends('admin.layouts.default')
@section('content')
<h4>Создать Работу</h4>
{{Form::open(['method'=>'POST', 'url'=>'/admin/workedit'])}}
<input style="display:none">
<input type="password" style="display:none">
<div class="clearfix">
  <div class="form-group col-md-6 ">
    {{Form::text('name', '', ['class'=>"form-control", 'placeholder'=>"Name"])}}
    {{$errors->first('name', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-6 ">
    {{Form::select('workgroup_id', $groups, '1',['class'=>"form-control"])}}
    {{$errors->first('workgroup_id', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-6 ">
    <button type="submit" class="btn btn-primary">Создать</button>
  </div>
</div>
{{Form::close()}}
@stop
