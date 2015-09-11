@extends('member.layouts.default')
@section('meta')
<title>Создать новую форму</title>
@stop
@section('content')
<h2>Заполните все поля и нажмите &laquo;Отправить&raquo;</h2>
{{Form::open(['method'=>'POST'])}}
<div class="input-wrapper long-inputs">
    <label for="kind_of_transport">Вид транспорта</label>
    {{Form::text('kind_of_transport','',['id'=>'kind_of_transport','placeholder'=>'Тент, рефрежетарот и т.п.'])}}
    {{$errors->first('kind_of_transport', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper long-inputs">
    <label for="cargo_name">Наименование груза</label>
    {{Form::text('cargo_name','',['id'=>'cargo_name','placeholder'=>'Что везти? Например, металлургическая смесь'])}}
    {{$errors->first('cargo_name', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper long-inputs">
    <label for="number_of_seats">Количество мест</label>
    {{Form::text('number_of_seats','',['id'=>'number_of_seats','placeholder'=>''])}}
    {{$errors->first('number_of_seats', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper long-inputs">
    <label for="volume">Объем груза в м<sup>3</sup></label>
    {{Form::text('volume','',['id'=>'volume','placeholder'=>''])}}
    {{$errors->first('volume', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper long-inputs">
    <label for="weight">Вес груза в тоннах</label>
    {{Form::text('weight','',['id'=>'weight','placeholder'=>''])}}
    {{$errors->first('weight', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper long-inputs">
    <label for="load_address">Адрес загрузки</label>
    {{Form::text('load_address','',['id'=>'load_address','placeholder'=>''])}}
    {{$errors->first('load_address', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper long-inputs">
    <label for="unloading_address">Адрес разгрузки</label>
    {{Form::text('unloading_address','',['id'=>'unloading_address','placeholder'=>''])}}
    {{$errors->first('unloading_address', '<span class="text-danger">:message</span>')}}
</div>
<div class="wrapper">
    <div class="input-wrapper long-inputs col-2">
        <label for="load_datetime">Дата и время загрузки</label>
        {{Form::text('load_datetime','',['id'=>'load_datetime','placeholder'=>''])}}
        {{$errors->first('load_datetime', '<span class="text-danger">:message</span>')}}
    </div>
    <div class="input-wrapper long-inputs col-2 clear">
        <label for="delivery_datetime">Предпочитаемые дата и время доставки</label>
        {{Form::text('delivery_datetime','',['id'=>'delivery_datetime','placeholder'=>''])}}
        {{$errors->first('delivery_datetime', '<span class="text-danger">:message</span>')}}
    </div>
</div>
<div class="input-wrapper long-inputs">
    <label for="method_of_payment">Форма оплаты</label>
    {{Form::text('method_of_payment','',['id'=>'method_of_payment','placeholder'=>''])}}
    {{$errors->first('method_of_payment', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper">
    <a href="{{$url}}" class="evth-btn"><i class="fa fa-arrow-circle-o-left"></i> Отменить и вернуться ко всем формам</a>
    {{Form::button('<i class="fa fa-paper-plane"></i> Сохранить и отправить',['type'=>'submit', 'class'=>'evth-btn'])}}
</div>
<script>
    $('#load_datetime, #delivery_datetime').datetimepicker({
        format: 'Y-m-d H:i:s',
        lang:'ru'
    });
</script>
@stop

