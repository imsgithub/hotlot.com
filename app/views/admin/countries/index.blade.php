@extends('admin.layouts.default')
@section('content')
<script>
//    var codes = ['AF',
//                'AL',
//                'AM',
//                'AT',
//                'AU',
//                'AZ',
//                'BA',
//                'BE',
//                'BG',
//                'BY',
//                'CH',
//                'CZ',
//                'DE',
//                'DK',
//                'EE',
//                'ES',
//                'FI',
//                'FR',
//                'GB',
//                'GE',
//                'GR',
//                'HR',
//                'HU',
//                'IE',
//                'IQ',
//                'IR',
//                'IT',
//                'KG',
//                'KZ',
//                'LI',
//                'LT',
//                'LU',
//                'LV',
//                'MD',
//                'ME',
//                'MK',
//                'MN',
//                'NL',
//                'NO',
//                'PL',
//                'PT',
//                'RO',
//                'RS',
//                'RU',
//                'SE',
//                'SI',
//                'SK',
//                'TM',
//                'TR',
//                'UA',
//                'UZ',
//                'VN'];
</script>
<h4>Коэффициенты стран</h4>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-sm-3">Название</th>
            <th class="col-sm-3">Код</th>
            <th class="col-sm-3">Действия</th>
        </tr>
    </thead>
    <tbody>
        @foreach($codes as $code)
        <tr>
            <td>{{$code->name}}</td>
            <td>{{$code->code}}</td>            
            <td><a href="/admin/countries/{{$code->id}}" class="btn btn-primary btn-xs">Редактировать</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<!--<div class="modal fade" id="countryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Введите значения в соответсвующие поля и нажмите сохранить</h4>
      </div>
      <div class="modal-body container-fluid">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
        <button type="button" class="btn btn-primary" id="save">Сохранить</button>
      </div>
    </div>
  </div>
</div>-->
<script>
    //Делаем селект в модальное окно
//    var select = document.createElement('select');
//    select.setAttribute('name', 'start');
//    select.classList.add('form-control');
//    for (var i=0; i<codes.length; i++) {
//        select.innerHTML += '<option value="'+codes[i]+'">'+codes[i]+'</option>';
//    };
//    
//    var countries_inputs = [];
//    var countries_divs = [];
//    for (var i=0; i<codes.length; i++) {
//        var input, div, label;
//        div = document.createElement('div');
//        div.classList.add('form-group');
//        
//        label = document.createElement('label');
//        label.setAttribute('for','end-'+codes[i]);
//        label.textContent = codes[i];
//        
//        input = document.createElement('input');
//        input.setAttribute('name', 'end-'+codes[i]);
//        input.setAttribute('id', 'end-'+codes[i]);
//        input.setAttribute('type','text');
//        input.setAttribute('placeholder',codes[i]);
//        input.classList.add('form-control');
//        
//        countries_inputs.push(input);
//        div.appendChild(label);
//        div.appendChild(input);
//        countries_divs.push(div);
//    }
//    
//    //помещаем его в модальное окно
//    var modal = document.querySelector('#countryModal .modal-body');
//    $('#countryModal').on('show.bs.modal', function () {
//        modal.appendChild(select);        
//        for (var i = 0; i <= 3; i++) {
//            var div = document.createElement('div');
//            div.classList.add('col-md-3');
//            for (var j = i*13; j < (i+1)*13; j++) {
//                div.appendChild(countries_divs[j]);
//            };
//            modal.appendChild(div);
//        };
//    });
//    //скрываем всё при закрытии модального окна
//    $('#countryModal').on('hide.bs.modal', function () {
//        modal.innerHTML = '';
//    });
//    function replace() {
//        this.value = this.value.replace( ',' , '.' );                
//    };
//    function validate() {		
//        var par = this.parentNode;
//        var mes;
//        if (par.querySelector('.message')) {
//            mes = par.querySelector('.message');
//            par.removeChild(mes);
//            par.classList.remove('has-error');
//        };
//        mes = document.createElement('span');
//        mes.classList.add('message');
//        if (this.value==='') {
//            mes.innerHTML = 'Это поле обязательно для заполнения';
//            par.appendChild(mes);
//            par.classList.add('has-error');
//            return false;
//        };
//        var name = this.getAttribute('name');                
//        if (((name==='start')||(name==='end'))&&(this.value.length!==2)) {
//            mes.innerHTML = 'Недопустимое значение';
//            par.appendChild(mes);
//            par.classList.add('has-error');
//            return false;
//        };
//        if (this.name.substring(0,3)==='end') {
//            var regexp = /[\d\.,]/g;
//            var match = this.value.match(regexp);
//            replace.call(this);
//            if ((match===null)||(this.value.length!==match.length)) {
//                mes.innerHTML = 'Недопустимое значение';
//                par.appendChild(mes);
//                par.classList.add('has-error');
//                return false;
//            }
//        };
//        if (name==='value') {
//            var regexp = /[\d\.,]/g;
//            var match = this.value.match(regexp);
//            replace.call(this);
//            if ((match===null)||(this.value.length!==match.length)) {
//                mes.innerHTML = 'Недопустимое значение';
//                par.appendChild(mes);
//                par.classList.add('has-error');
//                return false;
//            }
//        };                 
//        return true;
//    };
//    function addHandler(){
//        for (var i=0; i< countries_inputs.length; i++) {
//            validate.call(countries_inputs[i]);
//        }
//    }
//    function delHandler(){
//        var id = this.getAttribute('data-delete');
//        data = {
//            id: id,
//            action: 'delete'
//        };
//        doAjax(data);
//        var par = this.parentNode;
//        par = par.parentNode;
//        par.remove();
//    }
//    function editHandler() {
//        var id = this.getAttribute('data-edit');
//        var par = this.parentNode;
//        par = par.parentNode;        
//        var start = par.querySelector('td:first-child');
//        var end = par.querySelector('td:nth-child(2)');
//        var val = par.querySelector('td:nth-child(3)');
//        var inputs = {
//            start: document.createElement('input'),
//            end: document.createElement('input'),
//            value: document.createElement('input')
//        };
//        for (key in inputs) {
//            inputs[key].setAttribute('class', 'form-control input-sm');
//            inputs[key].setAttribute('name', key);
//        };
//        inputs.start.value = start.textContent;
//        inputs.end.value = end.textContent;
//        inputs.value.value = val.textContent;
//        start.innerHTML = '';
//        end.innerHTML = '';
//        val.innerHTML = '';
//        start.appendChild(inputs.start);
//        end.appendChild(inputs.end);
//        val.appendChild(inputs.value);
//        this.textContent = 'Сохранить';
//        this.classList.remove('btn-primary');
//        this.classList.add('btn-success');
//        this.removeAttribute('data-edit');
//        this.setAttribute('data-update', id);
//        this.addEventListener('click',updateHandler);
//        this.removeEventListener('click',editHandler);        
//    }
//    function updateHandler() {
//        console.log('work');
//        var par,start,end, val;
//        par = this.parentNode;
//        par = par.parentNode;
//        start = par.querySelector('[name="start"]');
//        end = par.querySelector('[name="end"]');
//        val = par.querySelector('[name="value"]');
//        data = {start, end, val};
//        var arr =[];
//        for (key in data) {
//          if(!(validate.call(data[key]))) arr.push(false);
//        };
//        if (arr.length>0) return false;
//        data.id = this.getAttribute('data-update');
//        data.action = 'update';
//        doAjax(data);
//    }
//    function doAjax(data){
//        var xhr, body;
//        xhr = new XMLHttpRequest;   
//        if (data.action==='add') {
//            xhr.open('post', '/admin/countries',true);
//            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//            body = 'start='+data.start.value+'&end='+data.end.value+'&value='+data.val.value;
//            xhr.send(body);
//            xhr.onreadystatechange = function(){
//                if (xhr.readyState != 4) return;
//                var resp = JSON.parse(xhr.responseText);
//                var tr = document.createElement('tr');
//                tr.innerHTML = '<td>'+resp.start+'</td><td>'+resp.end+'</td><td>'+resp.value+'</td><td>'+
//                        '<button class="btn btn-primary btn-xs edit" data-edit="'+resp.id+'">Изменить</button> <button class="btn btn-danger btn-xs delete" data-delete="'+resp.id+'">Удалить</button></td>';
//                $(first_row).after($(tr));
//                var del = tr.querySelector('[data-delete]');
//                var edit = tr.querySelector('[data-edit]');
//                edit.addEventListener('click', editHandler);
//                del.addEventListener('click', delHandler);
//            };    
//        };
//        if (data.action==='delete') {
//            xhr.open('post', '/admin/countries/destroy',true);
//            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//            body = 'id='+data.id;
//            xhr.send(body);
//            xhr.onreadystatechange = function(){
//                if (xhr.readyState != 4) return;  
//                console.log(xhr.responseText);
//            };    
//        };
//        if (data.action==='update') {
//            xhr.open('post', '/admin/countries/update',true);
//            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
//            body = 'id='+data.id+'&start='+data.start.value+'&end='+data.end.value+'&value='+data.val.value;
//            xhr.send(body);
//            xhr.onreadystatechange = function(){
//                if (xhr.readyState != 4) return;
//                var resp = JSON.parse(xhr.responseText);
//                console.log(resp);
//                var td = document.querySelector('[data-update="'+data.id+'"]');
//                var par = td.parentNode;
//                par = par.parentNode;
//                par.innerHTML = '<td>'+resp.start+'</td><td>'+resp.end+'</td><td>'+resp.value+'</td><td>'+
//                        '<button class="btn btn-primary btn-xs edit" data-edit="'+resp.id+'">Изменить</button> <button class="btn btn-danger btn-xs delete" data-delete="'+resp.id+'">Удалить</button></td>';                
//                var del = par.querySelector('[data-delete]');
//                var edit = par.querySelector('[data-edit]');
//                edit.addEventListener('click', editHandler);
//                del.addEventListener('click', delHandler);
//            };    
//        };
//    }
////    var add = document.querySelector('.add');
//    var first_row = document.getElementById('first-row');
////    add.addEventListener('click', function(){
////        var par,start,end,val;
////        par = this.parentNode;
////        par = par.parentNode;
////        start = par.querySelector('[name="start"]');
////        end = par.querySelector('[name="end"]');
////        val = par.querySelector('[name="value"]');
////        data = {start, end, val};
////        var arr =[];
////        for (key in data) {
////          if(!(validate.call(data[key]))) arr.push(false);
////        };
////        if (arr.length>0) return false;
////        data.action = 'add';
////        doAjax(data);
////    });
//    var save = document.getElementById('save');
//    save.addEventListener('click', addHandler);
//    var dels = document.querySelectorAll('[data-delete]');
//    for (var i = 0; i< dels.length; i++) {
//        dels[i].addEventListener('click', delHandler);
//    };
//    var edits = document.querySelectorAll('[data-edit]');
//    for (var i = 0; i< edits.length; i++) {
//        edits[i].addEventListener('click', editHandler);
//    };
</script>
@stop