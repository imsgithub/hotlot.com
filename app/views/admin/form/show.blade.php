@extends('admin.layouts.default')
@section('content')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><span class="text-success"><strong>:message</strong></span></div>')}}
<h4>Форма пользователя {{$user->email}}, создана {{$form->created_at}}</h4>
<p class="admin-color"><strong>Поля администратора</strong></p>
<p class="member-color"><strong>Поля пользователя</strong></p>
{{Form::open()}}
<div class="form-inline" style="padding: 5px 0;">
    <div class="form-group admin-form-group">
        <label class="control-label" for="cargo_number">Договор-заявка на первозку груза № </label>
        {{Form::text('cargo_number',$form->cargo_number,['id'=>'cargo_number','class'=>'form-control', 'placeholder'=>''])}}
        {{$errors->first('cargo_number', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form-group admin-form-group">
        <label class="control-label" for="cargo_date"> от </label>
        {{Form::text('cargo_date',$form->cargo_date,['id'=>'cargo_date','class'=>'form-control', 'placeholder'=>''])}}
        {{$errors->first('cargo_date', '<span class="text-danger">:message</span>')}}
    </div>
</div>
<div class="form-inline">
    <div class="form-group admin-form-group">
        <label class="control-label" for="agreement_number">к договору № </label>
        {{Form::text('agreement_number',$form->agreement_number,['id'=>'agreement_number','class'=>'form-control', 'placeholder'=>''])}}
        {{$errors->first('agreement_number', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="form-group admin-form-group">
        <label class="control-label" for="agreement_date"> от </label>
        {{Form::text('agreement_date',$form->agreement_date,['id'=>'agreement_date','class'=>'form-control', 'placeholder'=>''])}}
        {{$errors->first('agreement_date', '<span class="text-danger">:message</span>')}}
    </div>
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="kind_of_transport">Перевозчик</label>
    {{Form::text('transporter',$form->transporter,['id'=>'transporter','class'=>'form-control', 'placeholder'=>'Например: ТОВ "ОСТВIНД-ТРАНСПОРТ"'])}}
    {{$errors->first('transporter', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="contact_face">Контактное лицо</label>
    {{Form::text('contact_face',$form->contact_face,['id'=>'contact_face','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('contact_face', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group member-form-group">
    <label class="control-label" for="kind_of_transport">Вид транспорта</label>
    {{Form::text('kind_of_transport',$form->kind_of_transport,['id'=>'kind_of_transport','class'=>'form-control', 'placeholder'=>'Тент, рефрежетарот и т.п.'])}}
    {{$errors->first('kind_of_transport', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group member-form-group">
    <label class="control-label" for="cargo_name">Наименование груза</label>
    {{Form::text('cargo_name',$form->cargo_name,['id'=>'cargo_name','class'=>'form-control', 'placeholder'=>'Что везти? Например, металлургическая смесь'])}}
    {{$errors->first('cargo_name', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group member-form-group">
    <label class="control-label" for="number_of_seats">Количество мест</label>
    {{Form::text('number_of_seats',$form->number_of_seats,['id'=>'number_of_seats','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('number_of_seats', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group member-form-group">
    <label class="control-label" for="volume">Объем груза в м<sup>3</sup></label>
    {{Form::text('volume',$form->volume,['id'=>'volume','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('volume', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group member-form-group">
    <label class="control-label" for="weight">Вес груза в тоннах</label>
    {{Form::text('weight',$form->weight,['id'=>'weight','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('weight', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group member-form-group">
    <label class="control-label" for="load_address">Адрес загрузки</label>
    {{Form::text('load_address',$form->load_address,['id'=>'load_address','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('load_address', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="cc_load_address">Адрес таможенного оформления загрузки</label>
    {{Form::text('cc_load_address',$form->cc_load_address,['id'=>'cc_load_address','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('cc_load_address', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group member-form-group">
    <label class="control-label" for="unloading_address">Адрес разгрузки</label>
    {{Form::text('unloading_address',$form->unloading_address,['id'=>'unloading_address','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('unloading_address', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="cc_unloading_address">Адрес таможенного оформления разгрузки</label>
    {{Form::text('cc_unloading_address',$form->cc_unloading_address,['id'=>'cc_unloading_address','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('cc_unloading_address', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group member-form-group">
    <label class="control-label" for="load_datetime">Дата и время загрузки</label>
    {{Form::text('load_datetime',$form->load_datetime,['id'=>'load_datetime','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('load_datetime', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group member-form-group">
    <label class="control-label" for="delivery_datetime">Предпочитаемые дата и время доставки</label>
    {{Form::text('delivery_datetime',$form->delivery_datetime,['id'=>'delivery_datetime','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('delivery_datetime', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="payment_term">Условия оплаты</label>
    {{Form::text('payment_term',$form->payment_term,['id'=>'payment_term','class'=>'form-control', 'placeholder'=>'Например: Оплата по факту доставки в срок 7 банковских дней'])}}
    {{$errors->first('payment_term', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="additional_conditions">Дополнительные условия</label>
    {{Form::text('additional_conditions',$form->additional_conditions,['id'=>'additional_conditions','class'=>'form-control', 'placeholder'=>'Например: Загрузка верхняя. Необходимая документация: CMR'])}}
    {{$errors->first('additional_conditions', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group member-form-group">
    <label class="control-label" for="method_of_payment">Форма оплаты</label>
    {{Form::text('method_of_payment',$form->method_of_payment,['id'=>'method_of_payment','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('method_of_payment', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="price">Цена. Обязательно указать валюту!</label>
    {{Form::text('price',$form->price,['id'=>'price','class'=>'form-control', 'placeholder'=>'Например: 2100,00 Евро по кросс курсу USD в день оплаты'])}}
    {{$errors->first('price', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="car_brand">Марка авто</label>
    {{Form::text('car_brand',$form->car_brand,['id'=>'car_brand','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('car_brand', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="number_am">№ а/м</label>
    {{Form::text('number_am',$form->number_am,['id'=>'number_am','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('number_am', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="number_pp">№ п/п</label>
    {{Form::text('number_pp',$form->number_pp,['id'=>'number_pp','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('number_pp', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="driver_name">Имя водителя</label>
    {{Form::text('driver_name',$form->driver_name,['id'=>'driver_name','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('driver_name', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="driver_passport">Паспортные данные водителя</label>
    {{Form::text('driver_passport',$form->driver_passport,['id'=>'driver_passport','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('driver_passport', '<span class="text-danger">:message</span>')}}
</div>
<div class="form-group admin-form-group">
    <label class="control-label" for="driver_phone">Способ связи с водителем</label>
    {{Form::text('driver_phone',$form->driver_phone,['id'=>'driver_phone','class'=>'form-control', 'placeholder'=>''])}}
    {{$errors->first('driver_phone', '<span class="text-danger">:message</span>')}}
</div>
<div class="radio admin-form-group">
     <?php 
    if ($form->confirmed == 1) {
        $checked = true;
    } else {
        $checked = false;
    }
    ?>
    <label>{{Form::radio('confirmed', '1', $checked);}}Подтверждено</label>
    <label>{{Form::radio('confirmed', '0', !$checked);}}Не подтверждено</label>
</div>
<div class="form-group admin-form-group">
    <p class="bg-danger" style="padding: 15px"><strong>Если внесены изменения, то перед печатью обязательно сохранить!</strong></p>
    <a href="/admin/users/{{$user->id}}/forms" class="btn btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Вернуться к формам пользователя</a>
    <a href="/admin/users/{{$user->id}}/forms/{{$form->id}}/print" class="btn btn-info"><i class="fa fa-print"></i> Печать</a>
    {{Form::button('<i class="fa fa-cloud"></i> Сохранить',['type'=>'submit', 'class'=>'btn btn-success'])}}    
</div>
{{Form::close()}}
<script>
    $('#load_datetime, #delivery_datetime').datetimepicker({
        format: 'Y-m-d H:i:s',
        lang:'ru'
    });
    $('#cargo_date, #agreement_date').datetimepicker({
        format: 'Y-m-d',
        lang:'ru'
    });
</script>
@stop