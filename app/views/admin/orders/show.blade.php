@extends('admin.layouts.default')
@section('content')
<h4>Заявки номер {{$order->id}}, дата создания {{$order->created_at}} </h4>
<div>
    <p>Телефон - <strong>{{$order->phone}}</strong></p>    
    <p>{{$order->content}}</p>
    <p><strong>Изменить статус</strong></p>
    {{Form::open(['url'=>'/admin/orders/'.$order->id, 'method'=>'POST'])}}
    @foreach ($conditions as $condition)
        <div class="radio">
            <?php 
            if ($order->condition->id == $condition->id) {
                $checked = true;
            } else {
                $checked = false;
            }
            ?>
            <label>{{Form::radio('condition_id', $condition->id, $checked);}}{{$condition->ru_name}}</label>
        </div>
    @endforeach
    <div>
    {{Form::button('Сохранить', ['class'=>'btn btn-primary btn-xs', 'type'=>'submit'])}}    
    <a href="/admin/orders/condition/{{$order->condition->name}}" class="btn btn-default btn-xs">Назад</a>
</div>
    {{Form::close()}}
</div>

@stop