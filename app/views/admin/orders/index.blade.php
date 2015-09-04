@extends('admin.layouts.default')
@section('content')
<h4>Заявки</h4>
<p><strong id="condition">{{$title}}</strong></p>
<div class="btn-group" role="group" id="orders-conditions-menu">
    <a href="/admin/orders" class="btn btn-default">Все</a>
    <a href="/admin/orders/unreviewed" class="btn btn-danger">Непросмотренные</a>    
    <a href="/admin/orders/condition/unconfirmed" class="btn btn-warning">Неподтвержденные</a>
    <a href="/admin/orders/condition/ontheway" class="btn btn-primary">В пути</a>
    <a href="/admin/orders/condition/completed" class="btn btn-success">Доставленные</a>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-sm-1">ID</th>
            <th class="col-sm-4">Телефон</th>
            <th class="col-sm-4">Дата создания</th>
            <th class="col-sm-3">Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            @if ($order->viewed == 0)
                <tr class="danger">
            @elseif ($order->condition->name=='unconfirmed')
                <tr class="warning">
            @elseif ($order->condition->name=='ontheway')
                <tr class="info">
            @elseif ($order->condition->name=='completed')
                <tr class="success">
            @endif
            <td>{{$order->id}}</td>
            <td>{{$order->phone}}</td>            
            <td>{{$order->created_at}}</td>
            <td><a href="/admin/orders/{{$order->id}}" class="btn btn-primary btn-xs">Просмотреть</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$orders->links()}}

<script>
    var items, condition;
    items = document.querySelectorAll('#orders-conditions-menu a');
    condition = document.getElementById('condition');
    for(i=0;i<items.length;i++) {
        if (items[i].textContent===condition.textContent) items[i].classList.add('active');
    }
</script>
@stop