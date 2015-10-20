@extends('admin.layouts.default')
@section('content')
<h4>Области Украины</h4>
<div class="form-inline">
    <input type="text" class="form-control" id="address">
    <button type="button" class="btn btn-primary" id="check">Узнать область по адресу</button>
</div>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th class="col-sm-3">Название области</th>
            <th class="col-sm-3">Действия</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            {{Form::open(['method'=>'POST'])}}
            <td><input type="text" name="name" class="form-control input-sm" id="area-name" placeholder="Введите название области"></td>    
            <td><button type="submit" id="add-area" class="btn btn-xs btn-primary">Добавить</button></td>
            {{Form::close()}}
        </tr>
        @foreach($areas as $area)
        <tr>
            <td>{{$area->name}}</td>      
            <td>
                {{Form::open(['method'=>'DELETE'])}}
                {{Form::hidden('id', $area->id)}}
                <button type="submit" class="btn btn-danger btn-xs">Удалить</button>
                {{Form::close()}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<script>
    var add = document.getElementById('add-area'), 
        inp = document.getElementById('area-name'),
        del = document.querySelectorAll('[data-delete]'),
        address = document.getElementById('address'),
        geocoder = new google.maps.Geocoder();
    $(add).on('click', function(e){        
//        var regex = /[0-9.]+/g;        
//        ||(!$(inp).val().match(regex))||($(inp).val().match(regex)[0].length!==$(inp).val().length)
        if ($(inp).val()==='') {
            e.preventDefault();
            $(inp).parent().addClass('has-error');
            return false;
        }
    });
    $(inp).on('click', function(){
        $(this).parent().removeClass('has-error');
    });
    var autocomplete = new google.maps.places.Autocomplete(address);
    $('#check').on('click', function(){
        codeAddress(address, function(uacode){
            inp.value = uacode;
        });
    });
    function codeAddress(city, callback) {
        geocoder.geocode( { 'address': city.value}, function(results, status) {
          if (status == google.maps.GeocoderStatus.OK) {
              var l = results[0].address_components.length;
              var uacode = results[0].address_components[l-2].short_name;              
              callback.call(this, uacode);              
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
            callback.call(this);
          }
        });
      };

</script>
@stop