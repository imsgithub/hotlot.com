@extends('newmember.layouts.default')
@section('content')
<div class="content-row">
  <div class="form full-width">
    <span class="form__title">{{Lang::get('formpage.title')}}</span>
    {{Form::open(['method'=>'POST'])}}
    <span class="form__subtitle">{{Lang::get('formpage.cargo_params')}}</span>
    <div class="form__input-wrapper col-md-12">
      <label for="cargo_name">{{Lang::get('formpage.cargo_name')}}</label>
      {{Form::text('cargo_name','',['id'=>'cargo_name','placeholder'=>''])}}
      {{$errors->first('cargo_name', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="cargo_price">{{Lang::get('formpage.cargo_price')}}</label>
      {{Form::text('cargo_price','',['id'=>'cargo_price','placeholder'=>''])}}
      {{$errors->first('cargo_price', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="currency_id">{{Lang::get('formpage.currency')}}</label>
      <select id="currency_id" name="currency_id">
        @foreach ($currencies as $currency)
          <option value="{{$currency->id}}">{{$currency->name}}</option>
        @endforeach
      </select>
      {{$errors->first('currency_id', '<span class="text-danger">:message</span>')}}
    </div>
    <hr>
    <div class="form__input-wrapper col-md-6">
      <label for="price">{{Lang::get('formpage.delivery_price')}}</label>
      {{Form::text('price','',['id'=>'price','placeholder'=>''])}}
      {{$errors->first('price', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="insurance">{{Lang::get('formpage.isurence')}}</label>
      <input type="checkbox" name="insurance" id="insurance">
      {{$errors->first('insurance', '<span class="text-danger">:message</span>')}}
    </div>
    <hr>
    <div class="form__input-wrapper col-md-4">
      <label for="weight">{{Lang::get('formpage.weigth')}}</label>
      {{Form::text('weight','',['id'=>'weight','placeholder'=>''])}}
      {{$errors->first('weight', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-4">
      <label for="volume">{{Lang::get('formpage.volume')}}</label>
      {{Form::text('volume','',['id'=>'volume','placeholder'=>''])}}
      {{$errors->first('volume', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-4">
      <label for="number_of_seats">{{Lang::get('formpage.places_number')}}</label>
      {{Form::text('number_of_seats','',['id'=>'number_of_seats','placeholder'=>''])}}
      {{$errors->first('number_of_seats', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-12">
      <label for="requirements">{{Lang::get('formpage.security_cargo')}}</label>
      {{Form::text('requirements','',['id'=>'requirements','placeholder'=>''])}}
      {{$errors->first('requirements', '<span class="text-danger">:message</span>')}}
    </div>
    <span class="form__subtitle">{{Lang::get('formpage.route')}}</span>
    <div class="form__input-wrapper col-md-6">
      <label for="route_from">{{Lang::get('formpage.from_whence')}}</label>
      {{Form::text('route_from','',['id'=>'route_from','placeholder'=>''])}}
      {{$errors->first('route_from', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="route_where">{{Lang::get('formpage.where')}}</label>
      {{Form::text('route_where','',['id'=>'route_where','placeholder'=>''])}}
      {{$errors->first('route_where', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="cargo_type_id">{{Lang::get('formpage.delivery_type')}}</label>
      <select id="cargo_type_id" name="cargo_type_id">
        @foreach ($cargotypes as $cargo_type)
          <option value="{{$cargo_type->id}}">{{$cargo_type->name}}</option>
        @endforeach
      </select>
      {{$errors->first('cargo_type_id', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form__input-wrapper col-md-6">
      <label for="transport_type">{{Lang::get('formpage.transprt_type')}}</label>
      <select id="transport_type" name="transport_type">
        <option value="Авто">{{Lang::get('formpage.auto')}}</option>
        <option value="Морской" disabled="disabled">{{Lang::get('formpage.marine')}}</option>
        <option value="Ж/Д" disabled="disabled">{{Lang::get('formpage.railway')}}</option>
        <option value="Авиа" disabled="disabled">{{Lang::get('formpage.avia')}}</option>
      </select>
      {{$errors->first('transport_type', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="col-md-6">
      <span class="form__subtitle">{{Lang::get('formpage.loading')}}</span>
      <div class="form__input-wrapper col-md-12">
        <label for="load_datetime">{{Lang::get('formpage.date_time')}}</label>
        {{Form::text('load_datetime','',['id'=>'load_datetime','placeholder'=>''])}}
        {{$errors->first('load_datetime', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_transporter">{{Lang::get('formpage.shipper')}}</label>
        {{Form::text('load_transporter','',['id'=>'load_transporter','placeholder'=>''])}}
        {{$errors->first('load_transporter', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_address">{{Lang::get('formpage.adress')}}</label>
        {{Form::text('load_address','',['id'=>'load_address','placeholder'=>''])}}
        {{$errors->first('load_address', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_face">{{Lang::get('formpage.contact_person')}}</label>
        {{Form::text('load_face','',['id'=>'load_face','placeholder'=>''])}}
        {{$errors->first('load_face', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="load_phone">{{Lang::get('formpage.contact_phone')}}</label>
        {{Form::text('load_phone','',['id'=>'load_phone','placeholder'=>''])}}
        {{$errors->first('load_phone', '<span class="text-danger">:message</span>')}}
      </div>
    </div>
    <div class="col-md-6">
      <span class="form__subtitle">{{Lang::get('formpage.downloading')}}</span>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_datetime">{{Lang::get('formpage.date_time')}}</label>
        {{Form::text('unload_datetime','',['id'=>'unload_datetime','placeholder'=>''])}}
        {{$errors->first('unload_datetime', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_transporter">{{Lang::get('formpage.consignee')}}</label>
        {{Form::text('unload_transporter','',['id'=>'unload_transporter','placeholder'=>''])}}
        {{$errors->first('unload_transporter', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_address">{{Lang::get('formpage.adress')}}</label>
        {{Form::text('unload_address','',['id'=>'unload_address','placeholder'=>''])}}
        {{$errors->first('unload_address', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_face">{{Lang::get('formpage.contact_person')}}</label>
        {{Form::text('unload_face','',['id'=>'unload_face','placeholder'=>''])}}
        {{$errors->first('unload_face', '<span class="text-danger">:message</span>')}}
      </div>
      <div class="form__input-wrapper col-md-12">
        <label for="unload_phone">{{Lang::get('formpage.contact_phone')}}</label>
        {{Form::text('unload_phone','',['id'=>'unload_phone','placeholder'=>''])}}
        {{$errors->first('unload_phone', '<span class="text-danger">:message</span>')}}
      </div>
    </div>
    <div class="form__input-wrapper col-md-12">
      <label for="comment">{{Lang::get('formpage.comment')}}</label>
      <textarea id="comment" name="comment" rows="3"></textarea>
    </div>



    <div class="form__input-wrapper col-md-12">
      {{Form::submit(Lang::get('formpage.send'))}}
    </div>
    {{Form::close()}}
  </div>
</div>
@stop
