@extends('admin.layouts.default')
@section('content')
<h4>Редактровать группу '{{$groups->name}}'</h4>
{{Form::open(['method'=>'POST', 'url'=>'/admin/workgroupedit/editstore/'.$groups->id])}}
<input style="display:none">
<input type="text" style="display:none">
<div class="clearfix">
  <div class="form-group col-md-6 ">
    {{Form::text('name', "$groups->name", ['class'=>"form-control", 'placeholder'=>"Name"])}}
    {{$errors->first('name', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-6 ">
    {{Form::text('icon', "$groups->icon", ['class'=>"form-control", 'placeholder'=>"Icon"])}}
    {{$errors->first('icon', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-6 ">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</div>
{{Form::close()}}
@stop
