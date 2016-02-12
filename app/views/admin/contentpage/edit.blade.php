@extends('admin.layouts.default')
@section('content')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="text-success"><strong>:message</strong></span></div>')}}
<h4>Редактровать Страницу '{{$content_pages->title}}'</h4>
{{Form::open(['method'=>'POST', 'url'=>'/admin/contentpage/editstore/'.$content_pages->id])}}
<input style="display:none">
<input type="text" style="display:none">
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Заголовок</h5>
    {{Form::text('title', "$content_pages->title", ['class'=>"form-control", 'placeholder'=>"$content_pages->title"])}}
    {{$errors->first('title', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Title</h5>
    {{Form::text('title_page', "$content_pages->title_page", ['class'=>"form-control", 'placeholder'=>"$content_pages->title_page"])}}
    {{$errors->first('title_page', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Description</h5>
    {{Form::text('discription', "$content_pages->discription", ['class'=>"form-control", 'placeholder'=>"$content_pages->discription"])}}
    {{$errors->first('discription', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Alias</h5>
    {{Form::text('alias', "$content_pages->alias", ['class'=>"form-control", 'placeholder'=>"$content_pages->alias"])}}
    {{$errors->first('alias', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Keywords</h5>
    {{Form::text('keywords', "$content_pages->keywords", ['class'=>"form-control", 'placeholder'=>"$content_pages->keywords"])}}
    {{$errors->first('keywords', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Язык</h5>
    {{Form::text('language', "$content_pages->language", ['class'=>"form-control", 'placeholder'=>"$content_pages->language"])}}
    {{$errors->first('language', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Опубликовать</h5>
    @if ($content_pages->published)
      <input type="checkbox" checked="checked" class="" name="published">
    @else
      <input type="checkbox" class="" name="published">
    @endif
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-12 ">
    <h5>Контент</h5>
    {{Form::textarea('content', "$content_pages->content", ['class'=>"form-control", 'checked'=>"$content_pages->content",'id' => 'admin_content'])}}
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
