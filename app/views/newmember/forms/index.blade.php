@extends('newmember.layouts.default')
@section('content')
<div class="content-row">
  <div class="grid full-width">
    {{$errors->first('msg', '<span class="text-success">:message<span class="close">&times;</span></span>')}}
    <span class="grid__title"><a href="/profile/forms" class="grid__link">Заявки</a></span>
    <div class="grid__buttons">
      <!-- <span class="grid__button--active">В пути</span>
      <span class="grid__button">Архив</span>
      <span class="grid__button">Интересные</span>
      <span class="grid__button--calendar"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 40 41" width="28" height="28" enable-background="new 0 0 40 41" xml:space="preserve"><line fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" x1="13" y1="0" x2="13" y2="6"/><line fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" x1="27" y1="0" x2="27" y2="6"/><polyline fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" points="27,3 39,3 39,40 1,40 1,14 "/><line fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" x1="13" y1="3" x2="24" y2="3"/><polyline fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" points="39,11 1,11 1,3 10,3 "/><line fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" x1="12" y1="16.7" x2="8.4" y2="20.3"/><line fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" x1="21" y1="16.7" x2="17.4" y2="20.3"/><line fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" x1="30" y1="16.7" x2="26.4" y2="20.3"/><line fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" x1="12" y1="28.7" x2="8.4" y2="32.3"/><line fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" x1="21" y1="28.7" x2="17.4" y2="32.3"/><line fill="none" stroke="#e16f0e" stroke-width="2" stroke-miterlimit="10" x1="30" y1="28.7" x2="26.4" y2="32.3"/></svg></span> -->
      <a href="/profile/forms/create" class="grid__add-button" title="Создать заявку"><span class="icon-pencil"></span></a>
    </div>
    @if ($forms->isEmpty())
      <span class="grid__empty-title">{{Lang::get('member.empty_forms', ['link'=>'/profile/forms/create'])}}</span>
    @else
    <table class="table">
      <thead>
        <tr>
          <th>№</th>
          <th>Cтатус</th>
          <th>Дата</th>
          <th>Тип</th>
          <th>Действия</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($forms as $form)
          <tr>
            <td>{{$form->id}}</td>
            <td>
              @if ($form->admin_confirmed == 1)
                Подтверждена
              @else
                Не подтверждена
              @endif
            </td>
            <td>{{ date('d.m.Y', strtotime($form->updated_at)) }}</td>
            <td>
              @if ($form->admin_confirmed == 1)
                Контракт
              @else
                Заявка
              @endif
            </td>
            <td>
              <a href="/profile/forms/edit/{{$form->id}}" title="Редактировать" class="grid__edit icon-edit"></a>
              <a href="/profile/forms/delete/{{$form->id}}" title="Удалить" class="grid__delete icon-delete"></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    @endif
  </div>
</div>
@stop
