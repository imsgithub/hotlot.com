@extends('admin.layouts.default')
@section('content')
{{$errors->first('msg', '<div class="alert alert-success alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>:message</strong></div>')}}
<h4>Коэффициенты для области <strong>&laquo;{{$current->name}}&raquo;</strong></h4>
{{Form::open(['method'=>'POST']);}}
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-sm-3">Область</th>
            <th class="col-sm-3">Значение</th>
        </tr>
    </thead>
    <tbody>
        @foreach($areas as $area)
        <tr>
            <td>{{$area->name}}</td>      
            <td>
                @if (isset($values[$area->id]))          
                    <input type="text" class="form-control input-sm" value="{{$values[$area->id]}}" name="{{$names[$area->id]}}">
                @else
                    <input type="text" value="" class="form-control input-sm" name="new{{$area->id}}">
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<button type="submit" class="btn btn-primary">Сохранить</button>
{{Form::close()}}
<script>
    $('form').on('submit',function(e){
        var inputs = $(this).find('[type="text"]');        
        $.each(inputs, function(){
           var value = $(this).val();
           value = value.replace(',','.');
           $(this).val(value);
        });
    });
</script>
@stop