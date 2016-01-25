@extends('admin.layouts.default')
@section('content')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="text-success"><strong>:message</strong></span></div>')}}
<h4>Редактровать контент '{{$contents->title}}'</h4>
{{Form::open(['method'=>'POST', 'url'=>'/admin/contentedit/editstore/'.$contents->id])}}
<input style="display:none">
<input type="text" style="display:none">
<div class="clearfix">
  <div class="form-group col-md-6 ">
    {{Form::text('title', "$contents->title", ['class'=>"form-control", 'placeholder'=>"$contents->title"])}}
    {{$errors->first('title', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-6 ">
    {{Form::textarea('content', "$contents->content", ['class'=>"form-control", 'placeholder'=>"$contents->content",'id' => 'admin_content'])}}
    {{$errors->first('content', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-6 ">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</div>
<script>
  	CKEDITOR.replace( 'admin_content', {
enterMode	: Number(2)});
  </script>
{{Form::close()}}
@stop
