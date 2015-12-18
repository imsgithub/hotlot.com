@extends('newmember.layouts.default')
@section('content')
<div class="content-row">
  <div class="form full-width">
    <span class="form__title">Редактировать неподтвержденную заявку</span>
    {{Form::open(['method'=>'POST'])}}
    <span class="form__subtitle">Параметры груза</span>
    <div class="form__input-wrapper col-md-12">
      <label for="cargo_name">Наименование груза</label>
      {{Form::text('cargo_name',$form->cargo_name,['id'=>'cargo_name','placeholder'=>''])}}
      {{$errors->first('cargo_name', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="cargo_price">Стоимость груза</label>
      {{Form::text('cargo_price',$form->cargo_price,['id'=>'cargo_price','placeholder'=>''])}}
      {{$errors->first('cargo_price', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="currency_id">Валюта</label>
      <select id="currency_id" name="currency_id">
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
      {{Form::text('price',$form->price,['id'=>'price','placeholder'=>''])}}
      {{$errors->first('price', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="insurance">Оформить страховку?</label>
      @if ($form->insurance == 1)
      <input type="checkbox" name="insurance" id="insurance" checked="checked">
      @else
      <input type="checkbox" name="insurance" id="insurance">
      @endif
      {{$errors->first('insurance', '<span class="text-danger">:message</span>')}}
    </div>
    <hr>
    <div class="form__input-wrapper col-md-4">
      <label for="weight">Масса (т)</label>
      {{Form::text('weight',$form->weight,['id'=>'weight','placeholder'=>''])}}
      {{$errors->first('weight', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-4">
      <label for="volume">Объем (м<sup>3</sup>)</label>
      {{Form::text('volume',$form->volume,['id'=>'volume','placeholder'=>''])}}
      {{$errors->first('volume', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-4">
      <label for="number_of_seats">Количество мест</label>
      {{Form::text('number_of_seats',$form->number_of_seats,['id'=>'number_of_seats','placeholder'=>''])}}
      {{$errors->first('number_of_seats', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-12">
      <label for="requirements">Требования к креплению грузов</label>
      {{Form::text('requirements',$form->requirements,['id'=>'requirements','placeholder'=>''])}}
      {{$errors->first('requirements', '<span class="text-danger">:message</span>')}}
    </div>
    <span class="form__subtitle">Маршрут</span>
    <div class="form__input-wrapper col-md-6">
      <label for="route_from">Откуда</label>
      {{Form::text('route_from',$form->route_from,['id'=>'route_from','placeholder'=>''])}}
      {{$errors->first('route_from', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="route_where">Куда</label>
      {{Form::text('route_where',$form->route_where,['id'=>'route_where','placeholder'=>''])}}
      {{$errors->first('route_where', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="cargo_type_id">Тип перевозки</label>
      <select id="cargo_type_id" name="cargo_type_id">
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
      <select id="transport_type" name="transport_type">
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
        {{Form::text('load_datetime',$form->load_datetime,['id'=>'load_datetime','placeholder'=>''])}}
        {{$errors->first('load_datetime', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_transporter">Грузоотправитель</label>
        {{Form::text('load_transporter',$form->load_transporter,['id'=>'load_transporter','placeholder'=>''])}}
        {{$errors->first('load_transporter', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_address">Адрес</label>
        {{Form::text('load_address',$form->load_address,['id'=>'load_address','placeholder'=>''])}}
        {{$errors->first('load_address', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_face">Контактное лицо</label>
        {{Form::text('load_face',$form->load_face,['id'=>'load_face','placeholder'=>''])}}
        {{$errors->first('load_face', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_phone">Контактный телефон</label>
        {{Form::text('load_phone',$form->load_phone,['id'=>'load_phone','placeholder'=>''])}}
        {{$errors->first('load_phone', '<span class="text-danger">:message</span>')}}
      </div>
    </div>
    <div class="col-md-6">
      <span class="form__subtitle">Разгрузка</span>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_datetime">Дата и время</label>
        {{Form::text('unload_datetime',$form->unload_datetime,['id'=>'unload_datetime','placeholder'=>''])}}
        {{$errors->first('unload_datetime', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_transporter">Грузоотправитель</label>
        {{Form::text('unload_transporter',$form->unload_transporter,['id'=>'unload_transporter','placeholder'=>''])}}
        {{$errors->first('unload_transporter', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_address">Адрес</label>
        {{Form::text('unload_address',$form->unload_address,['id'=>'unload_address','placeholder'=>''])}}
        {{$errors->first('unload_address', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_face">Контактное лицо</label>
        {{Form::text('unload_face',$form->unload_face,['id'=>'unload_face','placeholder'=>''])}}
        {{$errors->first('unload_face', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_phone">Контактный телефон</label>
        {{Form::text('unload_phone',$form->unload_phone,['id'=>'unload_phone','placeholder'=>''])}}
        {{$errors->first('unload_phone', '<span class="text-danger">:message</span>')}}
      </div>
    </div>
    <div class="form__input-wrapper col-md-12">
      <label for="comment">Комментарий</label>
      <textarea id="comment" name="comment" rows="3">{{$form->comment}}</textarea>
    </div>



    <div class="form__input-wrapper col-md-12">
      {{Form::submit('Сохранить')}}
    </div>
    {{Form::close()}}
  </div>
</div>
@stop
