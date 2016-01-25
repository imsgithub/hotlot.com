@extends('admin.layouts.default')
@section('content')
<h4>Редактровать группу '{{$works->name}}'</h4>
{{Form::open(['method'=>'POST', 'url'=>'/admin/workedit/editstore/'.$works->id])}}
<input style="display:none">
<input type="text" style="display:none">
<div class="clearfix">
  <div class="form-group col-md-6 ">
    {{Form::text('name', "$works->name", ['class'=>"form-control", 'placeholder'=>"$works->name"])}}
    {{$errors->first('name', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-6 ">
    {{Form::select('workgroup_id', $groups, $works->workgroup_id,['class'=>"form-control"])}}
    {{$errors->first('workgroup_id', '<span class="text-danger">:message</span>')}}
  </div>
</div>
<div class="clearfix">
  <div class="form-group col-md-6 ">
    <button type="submit" class="btn btn-primary">Save</button>
  </div>
</div>
{{Form::close()}}
@stop
