@extends ('admin.layouts.default')
@section ('content')
<h4>Правила</h4>
{{Form::open(['url'=>'/admin/rules', 'method'=>'POST'])}}
<?php
$i = 1;
?>
@foreach ($coeffs as $coeff)
@if ($coeff->name == 'dl')
<div class="col-md-3 dl">
    <h5>{{$coeff->ru_name}}</h5>        
        @foreach ($rules[$coeff->name] as $rule)
        <div class="input-group input-group-sm" style="padding-bottom: 10px">
            <span class="input-group-addon" style="width: 60px;">{{$rule->letter}}</span>            
            {{Form::text($rule->id,$rule->value,array('class'=>'form-control'))}}            
        </div>
        @endforeach           
</div>
@else
<div class="col-md-3">
    <h5>{{$coeff->ru_name}}</h5>        
        @foreach ($rules[$coeff->name] as $rule)
        <div class="input-group input-group-sm" style="padding-bottom: 10px">
            <span class="input-group-addon" style="width: 60px;">{{$rule->letter}}</span>            
            {{Form::text($rule->id,$rule->value,array('class'=>'form-control'))}}            
        </div>
        @endforeach           
</div>
@if ($i%4==0)
<div class="clearfix"></div>
@endif
<?php
$i++;
?>
@endif
@endforeach
<div class="clearfix"></div>
{{Form::button('Сохранить',['type'=>'submit','id'=>'submit-coeffs-form','class'=>'btn btn-primary'])}}
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
            mes.innerHTML = 'Не может быть пустым';
            par.appendChild(mes);
            par.classList.add('has-error');
            return false;
        };        
        var regexp = /[\d\.,]/g;
        replace.call(this); 
        var match = this.value.match(regexp);                                      
        if (!match || match.length === 0) {
            mes.innerHTML = 'Недопустимое значение';
            par.appendChild(mes);
            par.classList.add('has-error');
            return false;
        }; 
        if (this.value.length!==match.length) {
            mes.innerHTML = 'Недопустимое значение';
            par.appendChild(mes);
            par.classList.add('has-error');
            return false;
        };
        return true;
    };
    var submit, inputs, dl_inputs;
    dl_inputs = document.querySelectorAll('.dl input[type="text"]')
    submit = document.getElementById('submit-coeffs-form');
    inputs = document.querySelectorAll('input[type="text"]');    
    for (var i = 0; i < dl_inputs.length; i++) {
        dl_inputs[i].value = dl_inputs[i].value/1000;
    };
    submit.addEventListener('click', function(e){
        var err_arr= [];
        for(var i = 0; i<inputs.length; i++ ) {
            if(!validate.call(inputs[i])) err_arr.push(false);
        };
        if (err_arr.length>0) {
            e.preventDefault();
            return false;            
        };
        for (var i = 0; i < dl_inputs.length; i++) {
            dl_inputs[i].value = dl_inputs[i].value*1000;
        };
        return true;
    });
</script>
@stop