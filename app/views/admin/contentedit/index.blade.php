@section('content')
@extends('admin.layouts.default')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="text-success"><strong>:message</strong></span></div>')}}
<h4>Редактор постов</h4>
<!--<a href="/admin/contentedit/create" class="btn btn-primary">Создать Контент</a>-->

            <a href="/changelanguage/en">En</a>
			<a href="/changelanguage/ru">Ru</a>
			<a href="/changelanguage/de">De</a>
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Заголовок</th>
      <th>Контент</th>
      <th>Действие</th>
    </tr>
  </thead>
  <tbody>
    @foreach($contents as $content)
    <tr>
      <td>{{$content->title}}</td>
      <td>{{$content->content}}</td>
      <td>
        {{Form::open(['method'=>'POST', 'url'=>'/admin/contentedit/edit/'.$content->id, 'class'=>'form-inline'])}}
        <button type="submit" class="btn btn-danger btn-xs">Редактировать</button>
        {{Form::close()}}
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
@stop
