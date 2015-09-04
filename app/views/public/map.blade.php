<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>google map</title>
        <link rel="stylesheet" href="evth/public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="evth/public/bootstrap-switch/css/bootstrap-switch.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
        <script src="evth/public/bootstrap-switch/js/bootstrap-switch.js"></script>        
        <style>
            #map {
                width: 500px;
                height: 500px;
            }
        </style>
    </head>
    <body>
        <div class="col-md-4">
            <div class="form">
                <h4>Данные маршрута</h4>
                <div class="form-group">
                    <label class="control-label" for="start">Откуда</label>
                    <input type="text" class="form-control required" id="start">
                </div>
                <div class="form-group">
                    <label class="control-label" for="end">Куда</label>
                    <input type="text" class="form-control required" id="end">
                </div>
                <div class="form-group">                    
                    <input id="transit-city-checkbox" type="checkbox" class="inline">
                </div>
                <div class="form-group">                    
                    <input type="text" class="form-control" id="transit" disabled="disabled">
                </div>
                <h4>Данные груза</h4>
                <div class="form-group">
                    <label class="control-label" for="w">Ширина (метры): 0,1 &ndash; 2</label>
                    <input type="text" class="form-control required" id="w">
                </div>
                <div class="form-group">
                    <label class="control-label" for="l">Длина (метры): 0,1 &ndash; 13,6</label>
                    <input type="text" class="form-control required" id="l">
                </div>
                <div class="form-group">
                    <label class="control-label" for="h">Высота (метры): 0,1 &ndash; 3,3</label>
                    <input type="text" class="form-control required" id="h">
                </div>
                <div class="form-group">
                    <label class="control-label" for="m">Масса (тонны): 0,1 &ndash; 22</label>
                    <input type="text" class="form-control required" id="m">
                </div>
            </div>  
            <button id="rend" class="btn btn-warning">Рассчитать</button>
            <button id="calc" class="btn btn-primary">Длина маршрута</button>
            <button id="addr" class="btn btn-success">Коды стран</button>
            <div id="output">
                <div id="dist"></div>
                <div id="country"></div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="pull-left" id="map"></div>
            <div class="form-group pull-right">
                <h4>Вывод</h4>                
                <textarea name="" id="textarea" cols="45" rows="20" class="form-control"></textarea>
            </div>
        </div>
        <pre>
            <?php
            foreach ($codes as $code) {
                if (count($code->countries)>0) {
                    foreach ($code->countries as $country) {
                        echo $code->code.$country->end.':'.$country->value.',<br>';                        
                    }
                }
//                echo $code->code.$code->countries->end.':'.$code->countries->value;
            }
            ?>
        </pre>
        <script>
            var rules = {
                distance: {
                    a: 3.58,
                    b: 2.24,
                    c: 1.83,
                    d: 1.42,
                    e: 1.34,
                    f: 1.24,
                    g: 1.1,
                    h: 1.05,
                    i: 1
                },
                countries: {
                    <?php
                    foreach ($codes as $code) {
                        if (count($code->countries)>0) {
                            foreach ($code->countries as $country) {
                                echo $code->code.$country->end.':'.$country->value.',';
//                                echo $country->end.$code->code.':'.$country->value.',';
                            }
                        }
                    }
                    ?>
                },
                cargo: {
                    w: {
                        min:0.1,
                        max:2
                    },
                    l: {
                        min:0.1,
                        a:1.9,
                        b:2.9,
                        c:4.9,
                        d:6.9,
                        e:9.9,                        
                        max:13.6
                    },
                    h: {
                        min:0.1,
                        middle:2.8,
                        max:3.3
                    },
                    m: {
                        min: 0.1,
                        a: 7,
                        b: 10,
                        max: 22
                    }                    
                }
            };
        </script>
        <script>
            var textarea = document.getElementById('textarea');
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
                var id = this.getAttribute('id');
                var regexp = /[\d\.,]/g;
                var match = this.value.match(regexp);
                if ((id==='w')||(id==='h')||(id==='l')||(id==='m')) {
                    replace.call(this);
                    if ((this.value<rules.cargo[id].min)||(this.value>rules.cargo[id].max)||(this.value.length!==match.length)) {                        
                        mes.innerHTML = 'Недопустимое значение';
                        par.appendChild(mes);
                        par.classList.add('has-error');
                        return false;
                    }
                }                
		return true;
            };
            function replace() {
		this.value = this.value.replace( ',' , '.' );                
            };            
            var data = {
                checkbox: $("[type='checkbox']"),
                cities: {
                    start: document.getElementById('start'),
                    end: document.getElementById('end'),
                    transit: document.getElementById('transit')
                },                
                tr_en: false,
                mapCanvas: document.getElementById('map'),
                output: {
                    dist: 1,
                    countries: {
                        start: '',
                        end: ''
                    }
                },
                directionsService: new google.maps.DirectionsService(),
                directionsDisplay: new google.maps.DirectionsRenderer(),
                autocomplete: {},
                coeffs: {
                    distance: 1,
                    load: 1,
                    country: 1
                }, 
                cargo: {
                    w: document.getElementById('w'),
                    l: document.getElementById('l'),
                    h: document.getElementById('h'),
                    m: document.getElementById('m')
                },
                price: 1,
                render: function(){
                    var temp, reverse_temp;
                    if (this.output.dist!=='') {
                        temp = parseInt(this.output.dist);
                        if (temp<=100000) {
                            this.coeffs.distance = rules.distance.a;
                        } else if (temp<=300000) {
                            this.coeffs.distance = rules.distance.b;
                        } else if (temp<=500000) {
                            this.coeffs.distance = rules.distance.c;
                        } else if (temp<=750000) {
                            this.coeffs.distance = rules.distance.d;
                        } else if (temp<=1000000) {
                            this.coeffs.distance = rules.distance.e;
                        } else if (temp<=1500000) {
                            this.coeffs.distance = rules.distance.f;
                        } else if (temp<=2500000) {
                            this.coeffs.distance = rules.distance.g;
                        } else if (temp<=3500000) {
                            this.coeffs.distance = rules.distance.h;
                        } else {
                            this.coeffs.distance = rules.distance.i;
                        }
                    };
                    temp = this.output.countries.start + this.output.countries.end;
                    reverse_temp = this.output.countries.end + this.output.countries.start;
//                    var key;
//                    for (key in rules.countries) {
//                        if (key === temp) this.coeffs.country = rules.countries[key];
//                    };
                    if (rules.countries[temp]!==undefined) {
                        this.coeffs.country = rules.countries[temp];
                    } else if (rules.countries[reverse_temp]!==undefined) {
                        this.coeffs.country = rules.countries[reverse_temp];
                    };
                    if ((this.cargo.h.value>rules.cargo.h.middle)&&(this.cargo.h.value<=rules.cargo.h.max)) {
                        this.coeffs.load = 1.2;
                    } else {
                        if ((this.cargo.l.value<=rules.cargo.l.max)&&(this.cargo.l.value>rules.cargo.l.e)) {
                            this.coeffs.load = 1;
                        } else if ((this.cargo.m.value>=rules.cargo.m.b)&&(this.cargo.m.value<=rules.cargo.m.max)) {
                            this.coeffs.load = 1;
                        } else if ((this.cargo.m.value<rules.cargo.m.b)&&(this.cargo.m.value>=rules.cargo.m.a)) {
                            if ((this.cargo.l.value<=rules.cargo.l.max)&&(this.cargo.l.value>rules.cargo.l.e)) {
                                this.coeffs.load = 1;
                            } else if ((this.cargo.l.value<=rules.cargo.l.e)&&(this.cargo.l.value>rules.cargo.l.d)) {
                                this.coeffs.load = 0.8;
                            } 
                        } else {
                            if ((this.cargo.l.value<=rules.cargo.l.d)&&(this.cargo.l.value>rules.cargo.l.c)) {
                                this.coeffs.load = 0.6;
                            } else if ((this.cargo.l.value<=rules.cargo.l.c)&&(this.cargo.l.value>rules.cargo.l.b)) {
                                this.coeffs.load = 0.5;
                            } else if ((this.cargo.l.value<=rules.cargo.l.b)&&(this.cargo.l.value>rules.cargo.l.a)) {
                                this.coeffs.load = 0.4;
                            } else {
                                this.coeffs.load = 0.3;
                            }
                        }
                    };
                    this.price = this.coeffs.load*this.coeffs.distance*this.coeffs.country*this.output.dist;                    
                },
                showAll: function() {
                    this.render();
                    textarea.innerHTML = 'Маршрут\nОткуда: ' + this.cities.start.value + '\n' +
                            'Куда: ' + this.cities.end.value + '\n';
                    if (this.tr_en) textarea.innerHTML += 'Транзит: ' + this.cities.transit.value + '\n';
                    textarea.innerHTML += 'Длина маршрута, м: ' + this.output.dist.toLocaleString() + '\n' +
                            'Страны: ' + this.output.countries.start + '-' + this.output.countries.end + '\n' +
                            'Коэффициент расстояния: ' + this.coeffs.distance + '\n' +
                            'Коэффициент страны: ' + this.coeffs.country + '\n' + 
                            'Коэффициент груза: ' + this.coeffs.load + '\n' +
                            'Цена: ' + this.price*0.001 + '\n';
                },
            };
            data.checkbox.bootstrapSwitch({
                onText: 'Вкл',
                offText: 'Выкл',
                labelText: 'Транзитный город'
            });
            data.checkbox.on('switchChange.bootstrapSwitch', function(event, state) {
                if (state) {
                    $(data.cities.transit).removeAttr('disabled');
                    data.cities.transit.classList.add('required');
                    data.tr_en = true;
                    initialize(data);
                    if (data.cities.transit.value!=='') {
                        calcRoute(function(dist){
                             data.output.dist.innerHTML = dist;
                        });
                    }
                } else {
                    $(data.cities.transit).attr('disabled','disabled');
                    data.cities.transit.classList.remove('required');
                    data.tr_en = false;
                    initialize(data);
                    calcRoute(function(dist){
                        data.output.dist.innerHTML = dist;
                    });
                };        
            });
            function initialize(data) {                      
                var mapOptions = {
                    center: new google.maps.LatLng(53.423956, 20.338401),
                    zoom: 4,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                }
                var map = new google.maps.Map(data.mapCanvas, mapOptions); 
                var acOptions = {
                    types: ['(cities)']
                };                
                data.directionsDisplay.setMap(map);
                data.autocomplete.start = new google.maps.places.Autocomplete(data.cities.start,acOptions);
                data.autocomplete.end = new google.maps.places.Autocomplete(data.cities.end,acOptions);
                if (data.tr_en) data.autocomplete.transit = new google.maps.places.Autocomplete(data.cities.transit,acOptions);
//                first_autocomplete.bindTo('bounds',map);
//                second_autocomplete.bindTo('bounds',map);               
            }
            initialize(data);
//            var directionsDisplay;
//            var directionsService = new google.maps.DirectionsService();
//            var directionsDisplay = new google.maps.DirectionsRenderer();
            
//            var chicago = new google.maps.LatLng(41.850033, -87.6500523);
//            var mapOptions = {
//            zoom:7,
//            center: chicago
//            }
//            map = new google.maps.Map(document.getElementById("map"), mapOptions);
            
            function calcRoute(callback) {//calcRoute(function(dist){console.log(dist)});
                var start = data.cities.start.value;
                var end = data.cities.end.value;
                var request = {
                    origin:start,
                    destination:end,
                    travelMode: google.maps.TravelMode.DRIVING                   
                };
                if (data.tr_en) {
                    request.waypoints = [{
                            location: data.cities.transit.value,
                            stopover: true
                    }]
                };
                data.directionsService.route(request, function(result, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        data.directionsDisplay.setDirections(result);
                        var dist = 0;
                        var leg = result.routes[0].legs;
                        for (var i = 0; i < leg.length; i++) {
                            dist += leg[i].distance.value;
                        }
//                        console.log(result.routes[0].legs[0].distance.text);
                        callback.call(this, dist);
                    } else {
                        console.log('Проверьте правильность ввода');
                        callback.call(this);
                    }
                });
            }
            
            
            var geocoder = new google.maps.Geocoder();
            function codeAddress(city, callback) {
                geocoder.geocode( { 'address': city.value}, function(results, status) {
                  if (status == google.maps.GeocoderStatus.OK) {
                      var l = results[0].address_components.length;
                      var code = results[0].address_components[l-1].short_name;
                      if (code.length>2) code = results[0].address_components[l-2].short_name;
                      callback.call(this, code);                      
                  } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                    callback.call(this);
                  }
                });                
              };
//            function codeAddress(data) {                
//                geocoder.geocode( { 'address': data.cities.start.value}, function(results, status) {
//                  if (status == google.maps.GeocoderStatus.OK) {
//                      var l = results[0].address_components.length;
//                      var code = results[0].address_components[l-1].short_name;
//                      data.output.country = code;
//                  } else {                    
//                    data.output.country = 'Geocode was not successful for the following reason: ' + status;
//                  }
//                });
//                geocoder.geocode( { 'address': data.cities.end.value}, function(results, status) {
//                  if (status == google.maps.GeocoderStatus.OK) {
//                      var l = results[0].address_components.length;
//                      var code = results[0].address_components[l-1].short_name;
//                      data.output.country += '-'+code;
//                  } else {                    
//                    data.output.country = 'Geocode was not successful for the following reason: ' + status;
//                  }
//                });
//              };
            var calc = document.getElementById('calc');
            var addr = document.getElementById('addr');
            var rend = document.getElementById('rend');
            var inputs = document.getElementsByClassName('required');
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener('click',function(){
                    var par = this.parentNode;
                    var mes = par.querySelector('.message');                    
                    if (mes!==null) par.removeChild(mes);
                    par.classList.remove('has-error');
                });
                inputs[i].addEventListener('blur',function(){
                    validate.call(this);
                });
            };
            calc.addEventListener('click', function(){
               calcRoute(function(dist){
                   data.output.dist = dist;
                   document.getElementById('dist').innerHTML = dist;
                   data.render();
               }); 
            });
//            addr.addEventListener('click', function(){
//               codeAddress(data);
//               document.getElementById('country').innerHTML = data.output.country;
//            });
            addr.addEventListener('click', function(){
               
            });
            rend.addEventListener('click', function(){                
                var arr = [];
                for (var i = 0; i< inputs.length; i++) {
                    if(!(validate.call(inputs[i]))) arr.push(false);
                };
                if (arr.length>0) return false;
                codeAddress(data.cities.start, function(code){
                    data.output.countries.start = code;
                });  
                codeAddress(data.cities.end, function(code){
                    data.output.countries.end = code;
                });
                calcRoute(function(dist){
                    data.output.dist = dist;
                    data.showAll();
                });                     
            });
        </script>

    </body>
</html>
