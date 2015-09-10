@extends('member.layouts.default')
@section('meta')
<title>Форма груза: {{$form->cargo_name}}</title>
@stop
@section('content')
<h2>Форма груза: {{$form->cargo_name}}</h2>
<div class="wrapper">
    <div class="text-wrapper">
        <p>Дата создания: <strong>{{$form->created_at}}</strong>;</p>
        <p>Вид транспорта: <strong>{{$form->cargo_name}}</strong>;</p>
        <p>Намиенование груза: <strong>{{$form->cargo_name}}</strong>;</p>
        <p>Количество мест: <strong>{{$form->number_of_seats}}</strong>;</p>
        <p>Объем груза: <strong>{{$form->volume}} м<sup>3</sup></strong>;</p>
        <p>Вес груза: <strong>{{$form->created_at}} т</strong>;</p>    
        <p>Адрес загрузки: <strong>{{$form->load_address}}</strong>;</p>
        <p>Адрес разгрузки: <strong>{{$form->unloading_address}}</strong>;</p>
        <p>Дата и время загрузки: <strong>{{$form->load_datetime}}</strong>;</p>
        <p>Форма оплаты: <strong>{{$form->method_of_payment}}</strong>;</p>
    </div>
    <div class="input-wrapper">
        <a href="{{$url}}" class="evth-btn"><i class="fa fa-arrow-circle-o-left"></i> Ко всем формам</a> <a href="{{$url}}/edit/{{$form->id}}" class="evth-btn"><i class="fa fa-pencil"></i> Редактировать</a>
    </div>
</div>
@stop

