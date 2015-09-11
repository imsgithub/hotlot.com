@extends('member.layouts.default')
@section('meta')
<title>Страница форм</title>
@stop
@section('content')
<h2>Созданных форм - {{count($forms)}}, можете создать новую</h2>
<div class="input-wrapper">
    <a href="{{$url}}/create" class="evth-btn"><i class="fa fa-plus-circle"></i> Создать форму</a>
</div>
<div class="wrapper">
    @foreach ($forms as $form)        
    <div class="delivery-form square-wrapper">
        @if ($form->confirmed==1)
        <div class="square-inner green">
        @else 
        <div class="square-inner red">
        @endif
            <div class="left">
                <span>Наименование груза: {{$form->cargo_name}}</span>
                <span>Дата создания: {{$form->created_at}}</span>            
                <span>Статус: <?php if ($form->confirmed==1){echo "Подтвеждена";}else{echo "Неподтвеждена";}?></span> 
                <span>Откуда: {{$form->load_address}}</span>            
                <span>Куда: {{$form->unloading_address}}</span>            
            </div>
            <div class="right">                
                <a href="{{$url}}/view/{{$form->id}}" class="evth-btn"><i class="fa fa-eye"></i> Просмотреть</a>
                <a href="{{$url}}/edit/{{$form->id}}" class="evth-btn"><i class="fa fa-pencil"></i> Редактировать</a>
            </div>
        </div>
    </div>
    @endforeach
    {{$forms->links()}}
</div>
@stop

