@extends('admin.layouts.default')
@section('content')
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-sm-3">Код</th>
            <th class="col-sm-3">Значение</th>
            <th class="col-sm-3">Действия</th>
        </tr>
    </thead>
    <tbody>
        <tr id="tr">
            <td><input type="text" class="form-control" placeholder="Введите код новой валюты" id="new-name"></td>
            <td><input type="text" class="form-control" placeholder="Введите курс новой валюты" id='new-value'></td>            
            <td><button class="btn btn-primary  btn-xs" id="save">Сохранить</button></td>
        </tr>
        @foreach($currencies as $currency)
            @if (($currency->name == 'EUR')&&($currency->id == '1'))
            <tr id="tr-{{$currency->id}}">
                <td class="name">{{$currency->name}}</td>
                <td class="value">{{$currency->value}}</td>            
                <td>Эталон</td>
            </tr>
            @else
            <tr id="tr-{{$currency->id}}">
                <td class="name">{{$currency->name}}</td>
                <td class="value">{{$currency->value}}</td>            
                <td><button class="btn btn-primary btn-xs edit" data-id="{{$currency->id}}">Редактировать</button> <button class="btn btn-xs btn-danger delete" data-id="{{$currency->id}}">Удалить</button></td>
            </tr>
            @endif
        @endforeach
    </tbody>
</table>
<script>
    function doCurrencyByAjax(data){
        var xhr, body, tr;
        xhr = new XMLHttpRequest();        
        tr = document.getElementById('tr');
        if (data.action === 'save') {
            xhr.open('POST', '/admin/currencies', true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            body = 'name='+data.name+'&value='+data.value;
            xhr.send(body);
            xhr.onreadystatechange = function (){
                if (xhr.readyState !== 4) return;
                var cur = JSON.parse(xhr.responseText);
                var new_tr = document.createElement('tr');
                new_tr.innerHTML = '<td>'+cur.name+'</td>'+
                        '<td>'+cur.value+'</td>'+
                        '<td>'+''+'</td>';
                $(tr).after(new_tr);
            };
        };
        if (data.action === 'edit') {
            xhr.open('POST', '/admin/currencies/'+data.id, true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            body = 'id=' + data.id + '&name='+data.name+'&value='+data.value;
            xhr.send(body);
            xhr.onreadystatechange = function (){
                if (xhr.readyState !== 4) return;
                var cur = JSON.parse(xhr.responseText);
                var par = document.getElementById('tr-'+data.id);
                var name = par.querySelector('.name');
                var value = par.querySelector('.value');
                name.innerHTML = cur.name;
                value.innerHTML = cur.value;                
            };
        };
        if (data.action === 'delete') {
            xhr.open('POST', '/admin/currencies/destroy/'+data.id, true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');            
            xhr.send();
            xhr.onreadystatechange = function (){
                if (xhr.readyState !== 4) return;                
                var par = document.getElementById('tr-'+data.id);
                par.remove();
            };
        }
    };
    function editIt() {
        var par, name, value;
        par = document.getElementById('tr-'+$(this).attr('data-id'));
        name = par.querySelector('.name');
        value = par.querySelector('.value');
        inp_name = document.createElement('input');
        inp_value = document.createElement('input');
        inp_name.setAttribute('type','text');
        inp_value.setAttribute('type','text');
        inp_name.setAttribute('class','form-control name');
        inp_value.setAttribute('class','form-control value');
        inp_name.value = name.innerHTML;
        inp_value.value = value.innerHTML;
        value.innerHTML ='';
        name.innerHTML ='';
        name.appendChild(inp_name);
        value.appendChild(inp_value);
        this.innerHTML = 'Сохранить';
        this.classList.remove('btn-primary');
        this.classList.add('btn-success');
        $(this).off('click');
        $(this).on('click', saveIt);
    };
    function saveIt() {
        var par, name, value, id;
        id = $(this).attr('data-id');
        par = document.getElementById('tr-'+$(this).attr('data-id'));
        name = par.querySelector('.name input');
        value = par.querySelector('.value input');
        doCurrencyByAjax({
            name: name.value,
            value: value.value,
            id: id,
            action: 'edit'
        });
        this.innerHTML = 'Редактировать';
        this.classList.add('btn-primary');
        this.classList.remove('btn-success');
        $(this).off('click');
        $(this).on('click', editIt);
    }
    function deleteIt(){
        var par, id;
        id = $(this).attr('data-id');
        par = document.getElementById('tr-'+$(this).attr('data-id'));
        if (confirm('Вы уверены?')) {
            doCurrencyByAjax({            
                id: id,
                action: 'delete'
            });
        }
    }
    var save, edits, dels, cur_name, cur_value;
    
    save = document.getElementById('save');
    edits = document.getElementsByClassName('edit');
    dels = document.getElementsByClassName('delete');
    
    cur_name = document.getElementById('new-name');
    cur_value = document.getElementById('new-value');
    
    save.addEventListener('click', function (){
        doCurrencyByAjax({
            name: cur_name.value,
            value: cur_value.value,
            action: 'save'
        });
    });
    $(edits).on('click', editIt);
    $(dels).on('click', deleteIt);
</script>
@stop