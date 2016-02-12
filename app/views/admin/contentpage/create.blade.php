@extends('admin.layouts.default')
@section('content')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="text-success"><strong>:message</strong></span></div>')}}
<h4>Создать странцу</h4>
{{Form::open(['method'=>'POST', 'url'=>'/admin/contentpage/', 'id'=>'contentPageValid'])}}
<input style="display:none">
<input type="text" style="display:none">
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Заголовок</h5>
    {{Form::text('title','',['class'=>"form-control", 'placeholder'=>"title"])}}
    {{$errors->first('title', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Title</h5>
    {{Form::text('title_page', "", ['class'=>"form-control", 'placeholder'=>""])}}
    {{$errors->first('title_page', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Описание</h5>
    {{Form::text('discription','', ['class'=>"form-control", 'placeholder'=>"discription"])}}
    {{$errors->first('discription', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Alias</h5>
    {{Form::text('alias','', ['class'=>"form-control", 'placeholder'=>"alias"])}}
    {{$errors->first('alias', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Keywords</h5>
    {{Form::text('keywords','', ['class'=>"form-control", 'placeholder'=>"keywords"])}}
    {{$errors->first('keywords', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Язык</h5>
    {{Form::text('language','', ['class'=>"form-control", 'placeholder'=>"language"])}}
    {{$errors->first('language', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Опубликовать</h5>
      <input type="checkbox" class="" name="published">
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Контент</h5>
    {{Form::textarea('content','', ['class'=>"form-control", 'placeholder'=>"content",'id' => 'admin_content',"rows"=>"500"])}}
    {{$errors->first('content', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</div>
<script>
  CKEDITOR.replace( 'admin_content', {
    enterMode	: Number(2)});
</script>
{{Form::close()}}
@stop
