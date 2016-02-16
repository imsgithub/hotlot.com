@section('content')
@extends('admin.layouts.default')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="text-success"><strong>:message</strong></span></div>')}}
<h4>Редактор страниц</h4>
<a href="/admin/contentpage/create" class="btn btn-primary">Создать Страницу</a>

<!--a href="/admin/contentpage?publish=1" class="btn btn-primary pull-right">Опубликованные</a>
<a href="/admin/contentpage?publish=0" class="btn btn-primary pull-right">Неопубликованные</a>
<a href="/admin/contentpage" class="btn btn-primary pull-right">Все статьи</a-->
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>Заголовок</th>
      <th>Description</th>
      <th>Опубликовано</th>
      <th>Действие</th>
    </tr>
  </thead>
  <tbody>
    @foreach($content_pages as $content_page)
    <tr>
      <td>{{$content_page->title}}</td>
      <td>{{$content_page->discription}}</td>
      <td>{{$content_page->published}}</td>
      <td>
        {{Form::open(['method'=>'POST', 'url'=>'/admin/contentpage/edit/'.$content_page->id, 'class'=>'form-inline'])}}
        <button type="submit" class="btn btn-danger btn-xs">Редактировать</button>
        {{Form::close()}}
          <p>
        {{Form::open(['method'=>'POST', 'url'=>'!!!/admin/contentpage/delete/'.$content_page->id, 'class'=>'form-inline'])}}
       <!--button type="submit" class="btn btn-danger btn-xs">Удалить</button-->
        {{Form::close()}}
          </p>
      </td>

    </tr>
    @endforeach
  </tbody>

</table>
{{$content_pages->links();}}
@stop
