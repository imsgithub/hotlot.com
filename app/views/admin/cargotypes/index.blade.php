@extends('admin.layouts.default')
@section('content')
<h3>Настройка коэффициентов типов перевозки</h3>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-sm-3">Название</th>
            <th class="col-sm-3">Значение</th>
            <th class="col-sm-3">Действия</th>
        </tr>
    </thead>
    <tbody>
        <tr id="tr">
            <td><input type="text" class="form-control" placeholder="Введите название" id='name'></td>
            <td><input type="text" class="form-control" placeholder="Введите значение" id='value'></td>                        
            <td><button class="btn btn-primary  btn-xs" id="save">Сохранить</button></td>
        </tr>
        @foreach($cargotypes as $cargotype)
            <tr id="tr-{{$cargotype->id}}">
                <td class="name">{{$cargotype->name}}</td>
                <td class="value">{{$cargotype->value}}</td>            
                <td><button class="btn btn-primary btn-xs edit" data-id="{{$cargotype->id}}">Редактировать</button> <button class="btn btn-xs btn-danger delete" data-id="{{$cargotype->id}}">Удалить</button></td>
            </tr>
        @endforeach
    </tbody>
</table>
<script>
    function makeMes(type, message) {
        $('div.alert').remove();
        var title, m;
        title = document.querySelector('h3');
        m = document.createElement('div');
        m.innerHTML = '<div class="alert alert-'+type+' alert-dismissible" role="alert">'+
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
            '<strong>'+message+'</strong></div>';        
        $(title).after(m);
    }
    function doCargotypeByAjax(data){
        var xhr, body, tr;
        xhr = new XMLHttpRequest();        
        tr = document.getElementById('tr');
        if (data.action === 'save') {
            xhr.open('POST', '/admin/cargotypes', true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            body = 'name='+data.name+'&value='+data.value;
            xhr.send(body);
            xhr.onreadystatechange = function (){
                if (xhr.readyState !== 4) return;
                console.log(xhr.responseText);
                var cargotype = JSON.parse(xhr.responseText);
                var new_tr = document.createElement('tr');
                new_tr.innerHTML = '<td>'+cargotype.name+'</td>'+
                        '<td>'+cargotype.value+'</td>'+
                        '<td>'+''+'</td>';
                $(tr).after(new_tr);
            };
        };
        if (data.action === 'edit') {
            xhr.open('POST', '/admin/cargotypes/'+data.id, true);
            xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            body = 'id=' + data.id + '&name='+data.name+'&value='+data.value;
            xhr.send(body);
            xhr.onreadystatechange = function (){
                if (xhr.readyState !== 4) return;
                var cargotype = JSON.parse(xhr.responseText);
                var par = document.getElementById('tr-'+data.id);
                var name = par.querySelector('.name');
                var value = par.querySelector('.value');
                name.innerHTML = cargotype.name;
                value.innerHTML = cargotype.value;                
            };
        };
        if (data.action === 'delete') {
            xhr.open('POST', '/admin/cargotypes/destroy/'+data.id, true);
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
        doCargotypeByAjax({
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
            doCargotypeByAjax({            
                id: id,
                action: 'delete'
            });
        }
    }
    var save, edits, dels, ct_name, ct_value;
    
    save = document.getElementById('save');
    edits = document.getElementsByClassName('edit');
    dels = document.getElementsByClassName('delete');
    
    ct_name = document.getElementById('name');
    ct_value = document.getElementById('value');
    
    save.addEventListener('click', function (){
        if ((ct_name.value==='')||(ct_value.value==='')) {
            makeMes('danger','Поля не могут быть путыми!');
            return;
        }
        doCargotypeByAjax({
            name: ct_name.value,
            value: ct_value.value.replace(',','.'),
            action: 'save'
        });
    });
    $(edits).on('click', editIt);
    $(dels).on('click', deleteIt);
</script>
@stop