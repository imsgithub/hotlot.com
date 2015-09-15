@extends('member.layouts.default')
@section('meta')
<title>Ваши личные данные</title>
@stop

@section('content')
@if (!isset($user->person->name))
<h2>Введите ваши данные и нажмите &laquo;Сохранить&raquo;</h2>
{{Form::open(['method', 'POST'])}}
<div class="input-wrapper">
    <label for="name">Имя</label>
    {{Form::text('name', '', ['id'=>'name', 'placeholder'=>'Иван'])}}
    {{$errors->first('name', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper">
    <label for="surname">Фамилия</label>
    {{Form::text('surname', '', ['id'=>'surname', 'placeholder'=>'Иванов'])}}
    {{$errors->first('surname', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper">
    <label for="patronymic">Отчество</label>
    {{Form::text('patronymic', '', ['id'=>'patronymic', 'placeholder'=>'Иванович'])}}
    {{$errors->first('patronymic', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper">
    <label for="phone">Телефон</label>
    {{Form::text('phone', '', ['id'=>'phone', 'placeholder'=>'0931234567'])}}
    {{$errors->first('phone', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper">    
    {{Form::button('Сохранить', ['type'=>'submit', 'class'=>'evth-btn'])}}
</div>
{{Form::close()}}
@else
{{$errors->first('success-msg', '<span class="text-success">:message</span>')}}
<h2>{{$user->person->name}}, Вы можете ввести новые данные и нажать &laquo;Сохранить&raquo;</h2>

{{Form::open(['method', 'POST'])}}
<div class="input-wrapper">
    <label for="name">Имя</label>
    {{Form::text('name', $user->person->name, ['id'=>'name', 'placeholder'=>'Иван'])}}
    {{$errors->first('name', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper">
    <label for="surname">Фамилия</label>
    {{Form::text('surname', $user->person->surname, ['id'=>'surname', 'placeholder'=>'Иванов'])}}
    {{$errors->first('surname', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper">
    <label for="surname">Отчество</label>
    {{Form::text('patronymic', $user->person->patronymic, ['id'=>'patronymic', 'placeholder'=>'Иванович'])}}
    {{$errors->first('patronymic', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper">
    <label for="phone">Телефон</label>
    {{Form::text('phone', $user->person->phone, ['id'=>'phone', 'placeholder'=>'0931234567'])}}
    {{$errors->first('phone', '<span class="text-danger">:message</span>')}}
</div>
<div class="input-wrapper">    
    {{Form::button('Сохранить', ['type'=>'submit', 'class'=>'evth-btn'])}}
</div>


@endif
@stop