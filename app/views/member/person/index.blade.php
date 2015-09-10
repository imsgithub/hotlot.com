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
    {{Form::button('Сохранить', ['type'=>'submit', 'class'=>'evth-btn'])}}
</div>
{{Form::close()}}
@else
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
    {{Form::button('Сохранить', ['type'=>'submit', 'class'=>'evth-btn'])}}
</div>


@endif
@stop