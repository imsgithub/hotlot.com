@extends('admin.layouts.default')
@section('content')
<h4>Коэффициенты областей Украины</h4>
{{Form::open(['method'=>'POST'])}}
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-sm-3">Название области</th>
            <th class="col-sm-3">Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach($areas as $area)
        <tr>
            <td>{{$area->name}}</td>      
            <td><a class="btn btn-xs btn-primary" href="/admin/uacoeffs/{{$area->id}}">Редактировать</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
{{Form::close()}}
@stop