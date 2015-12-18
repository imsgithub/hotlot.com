@extends('admin.layouts.default')
@section('content')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="text-success"><strong>:message</strong></span></div>')}}
<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>Email</th>
      <th>Дата создания</th>
      <th>Статус</th>
      <th>Действия</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($forms as $form)
      <tr>
        <td>{{$form->id}}</td>
        <td>{{$form->user->email}}</td>
        <td>{{$form->created_at}}</td>
        <td>
          @if ($form->admin_confirmed == 1 )
            Подтверждена
          @else
            Не подтверждена
          @endif
          @if ($form->user_confirmed == 1)
          &nbsp;-&nbsp;Контракт
          @else
          &nbsp;-&nbsp;Заявка
          @endif
        </td>
        <td><a href="/admin/users/{{$form->user_id}}/forms/{{$form->id}}" class="btn btn-primary btn-xs">Посмотреть</a></td>
      </tr>
    @endforeach
  </tbody>
</table>
{{$forms->links()}}
@stop
