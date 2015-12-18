@extends('newmember.layouts.default')
@section('content')
<div class="content-row">
  <div class="form full-width">
    <span class="form__title">Редактировать контракт</span>
    {{Form::open(['method'=>'POST','url'=>'/profile/forms/edit/'.$form->id.'/contract'])}}
    @if ($form->user_confirmed==1)
    <span class="form__subtitle">Контракт готов к печати</span>
    <div class="form__input-wrapper col-md-12">
      <a href="/profile/forms/edit/{{$form->id}}/contract" class="form__button">Распечатать</a>
    </div>
    <div class="form__input-wrapper col-md-12">
      <label for="user_email">Email</label>
      {{Form::text('user_email',$form->user_email,['id'=>'user_email','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('user_email', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="company_name">Название компании (RU)</label>
      {{Form::text('company_name',$form->company_name,['id'=>'company_name','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('company_name', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="en_company_name">Название компании (EN)</label>
      {{Form::text('en_company_name',$form->en_company_name,['id'=>'en_company_name','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('en_company_name', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="user_name">Имя (RU)</label>
      {{Form::text('user_name',$form->user_name,['id'=>'user_name','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('user_name', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="en_user_name">Имя (EN)</label>
      {{Form::text('en_user_name',$form->en_user_name,['id'=>'en_user_name','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('en_user_name', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="user_surname">Фамилия (RU)</label>
      {{Form::text('user_surname',$form->user_surname,['id'=>'user_surname','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('user_surname', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="en_user_surname">Фамилия (EN)</label>
      {{Form::text('en_user_surname',$form->en_user_surname,['id'=>'en_user_surname','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('en_user_surname', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="user_patronymic">Отчество (RU)</label>
      {{Form::text('user_patronymic',$form->user_patronymic,['id'=>'user_patronymic','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('user_patronymic', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="en_user_patronymic">Отчество (EN)</label>
      {{Form::text('en_user_patronymic',$form->en_user_patronymic,['id'=>'en_user_patronymic','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('en_user_patronymic', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="requisites">Реквизиты (RU)</label>
      <textarea id="requisites" name="requisites" rows="8" disabled='disabled'>{{$form->requisites}}</textarea>
      {{$errors->first('requisites', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="en_requisites">Реквизиты (EN)</label>
      <textarea id="en_requisites" name="en_requisites" rows="8" disabled='disabled'>{{$form->en_requisites}}</textarea>
      {{$errors->first('en_requisites', '<span class="text-danger">:message</span>')}}
    </div>
    @else
    <span class="form__subtitle">Для печати заполните дополнительные поля</span>
    <div class="form__input-wrapper col-md-12">
      <label for="user_email">Email</label>
      @if ($form->email == '')
      {{Form::text('user_email',Session::get('email'),['id'=>'user_email','placeholder'=>''])}}
      @else
      {{Form::text('user_email',$form->email,['id'=>'user_email','placeholder'=>''])}}
      @endif
      {{$errors->first('user_email', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="company_name">Название компании (RU)</label>
      {{Form::text('company_name',$form->company_name,['id'=>'company_name','placeholder'=>''])}}
      {{$errors->first('company_name', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="en_company_name">Название компании (EN)</label>
      {{Form::text('en_company_name',$form->en_company_name,['id'=>'en_company_name','placeholder'=>''])}}
      {{$errors->first('en_company_name', '<span class="text-danger">:message</span>')}}
    </div>
    <hr>
    <div class="form__input-wrapper col-md-6">
      <label for="user_name">Имя (RU)</label>
      @if (isset($person))
      {{Form::text('user_name',$person->name,['id'=>'user_name','placeholder'=>''])}}
      @else
      {{Form::text('user_name',$form->user_name,['id'=>'user_name','placeholder'=>''])}}
      @endif
      {{$errors->first('user_name', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="en_user_name">Имя (EN)</label>
      {{Form::text('en_user_name',$form->en_user_name,['id'=>'en_user_name','placeholder'=>''])}}
      {{$errors->first('en_user_name', '<span class="text-danger">:message</span>')}}
    </div>
    <hr>
    <div class="form__input-wrapper col-md-6">
      <label for="user_surname">Фамилия (RU)</label>
      @if (isset($person))
      {{Form::text('user_surname',$person->surname,['id'=>'user_surname','placeholder'=>''])}}
      @else
      {{Form::text('user_surname',$form->user_surname,['id'=>'user_surname','placeholder'=>''])}}
      @endif
      {{$errors->first('user_surname', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="en_user_surname">Фамилия (EN)</label>
      {{Form::text('en_user_surname',$form->en_user_surname,['id'=>'en_user_surname','placeholder'=>''])}}
      {{$errors->first('en_user_surname', '<span class="text-danger">:message</span>')}}
    </div>
    <hr>
    <div class="form__input-wrapper col-md-6">
      <label for="user_patronymic">Отчество (RU)</label>
      @if (isset($person))
      {{Form::text('user_patronymic',$person->patronymic,['id'=>'user_patronymic','placeholder'=>''])}}
      @else
      {{Form::text('user_patronymic',$form->user_patronymic,['id'=>'user_patronymic','placeholder'=>''])}}
      @endif
      {{$errors->first('user_patronymic', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="en_user_patronymic">Отчество (EN)</label>
      {{Form::text('en_user_patronymic',$form->en_user_patronymic,['id'=>'en_user_patronymic','placeholder'=>''])}}
      {{$errors->first('en_user_patronymic', '<span class="text-danger">:message</span>')}}
    </div>
    <hr>
    <div class="form__input-wrapper col-md-6">
      <label for="requisites">Реквизиты (RU)</label>
      <textarea id="requisites" name="requisites" rows="8">{{$form->requisites}}</textarea>
      {{$errors->first('requisites', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="en_requisites">Реквизиты (EN)</label>
      <textarea id="en_requisites" name="en_requisites" rows="8">{{$form->en_requisites}}</textarea>
      {{$errors->first('en_requisites', '<span class="text-danger">:message</span>')}}
    </div>
    <hr>
    <div class="form__input-wrapper col-md-12">
      {{Form::submit('Подтвердить и сохранить')}}
    </div>
    @endif
    <span class="form__subtitle">Параметры груза</span>
    <div class="form__input-wrapper col-md-12">
      <label for="cargo_name">Наименование груза</label>
      {{Form::text('',$form->cargo_name,['id'=>'cargo_name','placeholder'=>'','disabled'=>'disabled'])}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="cargo_price">Стоимость груза</label>
      {{Form::text('',$form->cargo_price,['id'=>'cargo_price','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('cargo_price', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="currency_id">Валюта</label>
      <select id="currency_id" name="" disabled='disabled'>
        @foreach ($currencies as $currency)
          @if ($form->currency_id == $currency->id)
          <option value="{{$currency->id}}" selected="selected">{{$currency->name}}</option>
          @else
          <option value="{{$currency->id}}">{{$currency->name}}</option>
          @endif
        @endforeach
      </select>
      {{$errors->first('currency_id', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="price">Стоимость перевозки</label>
      {{Form::text('',$form->price,['id'=>'price','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('price', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="insurance">Оформить страховку?</label>
      @if ($form->insurance == 1)
      <input type="checkbox" name="" id="insurance" checked="checked" disabled='disabled'>
      @else
      <input type="checkbox" name="" id="insurance" disabled='disabled'>
      @endif
      {{$errors->first('insurance', '<span class="text-danger">:message</span>')}}
    </div>
    <hr>
    <div class="form__input-wrapper col-md-4">
      <label for="weight">Масса (т)</label>
      {{Form::text('',$form->weight,['id'=>'weight','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('weight', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-4">
      <label for="volume">Объем (м<sup>3</sup>)</label>
      {{Form::text('',$form->volume,['id'=>'volume','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('volume', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-4">
      <label for="number_of_seats">Количество мест</label>
      {{Form::text('',$form->number_of_seats,['id'=>'number_of_seats','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('number_of_seats', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-12">
      <label for="requirements">Требования к креплению грузов</label>
      {{Form::text('',$form->requirements,['id'=>'requirements','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('requirements', '<span class="text-danger">:message</span>')}}
    </div>
    <span class="form__subtitle">Маршрут</span>
    <div class="form__input-wrapper col-md-6">
      <label for="route_from">Откуда</label>
      {{Form::text('',$form->route_from,['id'=>'route_from','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('route_from', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="route_where">Куда</label>
      {{Form::text('',$form->route_where,['id'=>'route_where','placeholder'=>'','disabled'=>'disabled'])}}
      {{$errors->first('route_where', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="cargo_type_id">Тип перевозки</label>
      <select id="cargo_type_id" name="" disabled='disabled'>
        @foreach ($cargotypes as $cargo_type)
          @if ($form->cargo_type_id == $cargo_type->id)
          <option value="{{$cargo_type->id}}" selected="selected">{{$cargo_type->name}}</option>
          @else
          <option value="{{$cargo_type->id}}">{{$cargo_type->name}}</option>
          @endif
        @endforeach
      </select>
      {{$errors->first('cargo_type_id', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="transport_type">Тип транспорта</label>
      <select id="transport_type" name="transport_type" disabled='disabled'>
        <option value="Авто">Авто</option>
        <option value="Морской" disabled="disabled">Морской</option>
        <option value="Ж/Д" disabled="disabled">Ж/Д</option>
        <option value="Авиа" disabled="disabled">Авиа</option>
      </select>
      {{$errors->first('transport_type', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="col-md-6">
      <span class="form__subtitle">Загрузка</span>
      <div class="form__input-wrapper col-md-12">
        <label for="load_datetime">Дата и время</label>
        {{Form::text('',$form->load_datetime,['id'=>'load_datetime','placeholder'=>'','disabled'=>'disabled'])}}
        {{$errors->first('load_datetime', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_transporter">Грузоотправитель</label>
        {{Form::text('',$form->load_transporter,['id'=>'load_transporter','placeholder'=>'','disabled'=>'disabled'])}}
        {{$errors->first('load_transporter', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_address">Адрес</label>
        {{Form::text('',$form->load_address,['id'=>'load_address','placeholder'=>'','disabled'=>'disabled'])}}
        {{$errors->first('load_address', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_face">Контактное лицо</label>
        {{Form::text('',$form->load_face,['id'=>'load_face','placeholder'=>'','disabled'=>'disabled'])}}
        {{$errors->first('load_face', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_phone">Контактный телефон</label>
        {{Form::text('',$form->load_phone,['id'=>'load_phone','placeholder'=>'','disabled'=>'disabled'])}}
        {{$errors->first('load_phone', '<span class="text-danger">:message</span>')}}
      </div>
    </div>
    <div class="col-md-6">
      <span class="form__subtitle">Разгрузка</span>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_datetime">Дата и время</label>
        {{Form::text('',$form->unload_datetime,['id'=>'unload_datetime','placeholder'=>'','disabled'=>'disabled'])}}
        {{$errors->first('unload_datetime', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_transporter">Грузоотправитель</label>
        {{Form::text('',$form->unload_transporter,['id'=>'unload_transporter','placeholder'=>'','disabled'=>'disabled'])}}
        {{$errors->first('unload_transporter', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_address">Адрес</label>
        {{Form::text('',$form->unload_address,['id'=>'unload_address','placeholder'=>'','disabled'=>'disabled'])}}
        {{$errors->first('unload_address', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_face">Контактное лицо</label>
        {{Form::text('',$form->unload_face,['id'=>'unload_face','placeholder'=>'','disabled'=>'disabled'])}}
        {{$errors->first('unload_face', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_phone">Контактный телефон</label>
        {{Form::text('',$form->unload_phone,['id'=>'unload_phone','placeholder'=>'','disabled'=>'disabled'])}}
        {{$errors->first('unload_phone', '<span class="text-danger">:message</span>')}}
      </div>
    </div>
    <div class="form__input-wrapper col-md-12">
      <label for="comment">Комментарий</label>
      <textarea id="comment" name="comment" disabled="disabled" rows="3">{{$form->comment}}</textarea>
    </div>
    <div class="form__input-wrapper col-md-12">
      {{Form::submit('Сохранить')}}
    </div>
    {{Form::close()}}
  </div>
</div>
@stop
