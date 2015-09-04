@extends('admin.layouts.default')
@section('content')
<h4>Настройки коэффициентов страны <strong>{{$code->name}} - {{$code->code}}</strong></h4>
{{Form::open(['method'=>'POST', 'url'=>'/admin/countries/update'])}}
{{Form::hidden('id',$code->id)}}
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-sm-3">Cтрана</th>
            <th class="col-sm-3">Код</th>         
            <th class="col-sm-3">Значение</th>            
        </tr>
    </thead>
    <tbody>
        @foreach ($codes as $c)
        <tr>
            <td>{{$c->name}}</td>
            <td>{{$c->code}}</td>
            @if (isset($values[$c->code]))
            <td>{{Form::text($c->code,$values[$c->code],['class'=>'form-control input-sm'])}}</td>
            @else
            <td>{{Form::text($c->code,'',['class'=>'form-control input-sm'])}}</td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>

<?php //var_dump($values)?>
<button type="submit" class="btn btn-primary">Сохранить</button>
{{Form::close()}}
<script>
    function replace() {
        this.value = this.value.replace( ',' , '.' );                
    };
    function validate() {		
        var par = this.parentNode;
        var mes;
        if (par.querySelector('.message')) {
            mes = par.querySelector('.message');
            par.removeChild(mes);
            par.classList.remove('has-error');
        };
        mes = document.createElement('span');
        mes.classList.add('message');
        if (this.value==='') {
            mes.innerHTML = 'Это поле обязательно для заполнения';
            par.appendChild(mes);
            par.classList.add('has-error');
            return false;
        };
        var regexp = /[\d\.,]/g;
        var match = this.value.match(regexp);
        replace.call(this);
        if ((match===null)||(this.value.length!==match.length)) {
            mes.innerHTML = 'Недопустимое значение';
            par.appendChild(mes);
            par.classList.add('has-error');
            return false;
        }   
        return true;
    };
    var inputs, button;
    
    inputs = document.querySelectorAll('[type="text"]');
    button = document.querySelector('button');
    button.addEventListener('click', function(e){
        var err_arr = [];
        for (var i = 0; i < inputs.length; i++) {
            if (!validate.call(inputs[i])){
                err_arr.push(false);
            };           
        };
        if (err_arr.length>0) {
            e.preventDefault();
            return false;
        };
        return true;
    });
</script>
@stop

