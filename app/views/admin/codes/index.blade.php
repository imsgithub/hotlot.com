@extends('admin.layouts.default')
@section('content')
<h4>Коды стран</h4>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-sm-3">Название</th>
            <th class="col-sm-3">Код</th>         
            <th class="col-sm-3">Действия</th>            
        </tr>
    </thead>
    <tbody>
        <tr id="first-row">
            <td><input type="text" class="input-sm form-control" name="name"></td>
            <td><input type="text" class="input-sm form-control" name="code"></td>            
            <td><button class="btn btn-primary btn-xs" data-action="add" type="button">Добавить</button></td>
        </tr>
        @foreach ($codes as $code)
        <tr>
            <td>{{$code->name}}</td>
            <td>{{$code->code}}</td>
            <td><button class="btn btn-danger btn-xs delete" data-action="delete" data-id="{{$code->id}}">Удалить</button></td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    var app = {
        first_row: document.getElementById('first-row'),
        add: function(data) {
            var xhr = new XMLHttpRequest;
            xhr.open('POST', '/admin/codes', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            var body = 'code='+data.code+'&name='+data.name;
            xhr.send(body);
            xhr.onreadystatechange = function() {
                if (xhr.readyState !== 4) return;  
                console.log(xhr.responseText);
                var resp = JSON.parse(xhr.responseText);
                
                var tr = document.createElement('tr');
                tr.innerHTML = '<td>'+resp.name+'</td><td>'+resp.code+
                        '</td><td><button class="btn btn-danger btn-xs delete" data-action="delete" data-id="'+resp.id+'">Удалить</button></td>';
                $(app.first_row).after(tr);
                var but = tr.querySelector('[data-action="delete"]');
                but.addEventListener('click',deleteHandler);
                data.inputs.name.removeAttribute('disabled');
                data.inputs.code.removeAttribute('disabled');
                data.inputs.name.value = '';
                data.inputs.code.value = '';
            };
            data.inputs.name.setAttribute('disabled','disabled');
            data.inputs.code.setAttribute('disabled','disabled');
        },
        del: function(data) {
            var xhr = new XMLHttpRequest;
            xhr.open('POST', '/admin/codes/destroy', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            var body = 'id='+data.id;
            xhr.send(body);
            xhr.onreadystatechange = function() {
                if (xhr.readyState !== 4) return;
                var but = document.querySelector('[data-id="'+data.id+'"');
                var par = but.parentNode;
                par = par.parentNode;
                par.remove();
                console.log(xhr.responseText);
            };
        }
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
        var name = this.getAttribute('name');                
        if ((name==='code')&&(this.value.length!==2)) {
            mes.innerHTML = 'Недопустимое значение';
            par.appendChild(mes);
            par.classList.add('has-error');
            return false;
        };    
        if (name==='code') this.value = this.value.toUpperCase();        
        return true;
    };
    function addHandler() {
        var par, inputs, err_arr;
        par = this.parentNode;
        par = par.parentNode;
        inputs = {
            name: par.querySelector('[name="name"]'),
            code: par.querySelector('[name="code"]')
        };
        err_arr = [];
        for (key in inputs) {
            if (!validate.call(inputs[key])) err_arr.push(false);
        };
        if (err_arr.length > 0) return;
        app.add({code:inputs.code.value,name:inputs.name.value,inputs:inputs});
    };
    function deleteHandler() {
        var par;
        par = this.parentNode;
        par = par.parentNode;
        var id = this.getAttribute('data-id');
        app.del({id:id});
    }
    var add, del;
    add = document.querySelector('[data-action="add"]');    
    add.addEventListener('click',addHandler);
    
    del = document.querySelectorAll('[data-action="delete"]');
    for (var i = 0; i < del.length; i++) {
        del[i].addEventListener('click',deleteHandler);
    }
</script>
@stop