<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>google map</title>
        <link rel="stylesheet" href="evth/public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="evth/public/bootstrap-switch/css/bootstrap-switch.css">
        <link rel="stylesheet" href="evth/public/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
        <script src="evth/public/bootstrap-switch/js/bootstrap-switch.js"></script>        
        <style>
            #map {
                width: inherit;
                height: inherit;
            }            
        </style>
    </head>
    <body>
    <div class="overlay">
        <div class="map-wrapper">
            <div class="map" id="map"></div>
            <div class="map-forms-wrapper">
                <div class="map-form-input">
                    <div class="form-header">
                        <div class="helper">
                            <span class="glyphicon glyphicon-question-sign helper-question"></span>
                            <span class="helper-content">Заполните эту форму и нажмите "Рассчитать".</span>
                        </div>
                        <h1 class="title">Форма заявки</h1>
                    </div>
                    <h2 class="subtitle">Введите города</h2>                    
                    <div class="input-wrapper">
                        <div class="helper">
                            <span class="glyphicon glyphicon-question-sign helper-question"></span>
                            <span class="helper-content">Введите начало маршрута. Поле не должно быть пустым.</span>
                        </div>                            
                        <input type="text" class="required" id="start" value="{{$inputs['start']}}" placeholder="откуда">
                    </div>
                    <div class="input-wrapper">
                        <div class="helper">
                            <span class="glyphicon glyphicon-question-sign helper-question"></span>
                            <span class="helper-content">Введите конец маршрута. Поле не должно быть пустым.</span>
                        </div>  
                        <input type="text" class="required" id="end" value="{{$inputs['end']}}" placeholder="куда">
                    </div>                    
                    <h2 class="subtitle">Добавить транзитный город</h2>
                    <div class="transit">
                        <span class="glyphicon glyphicon-plus-sign" id="add_transit" data-id="0"></span>
                        <span class="glyphicon glyphicon-minus-sign" id="del_transit" data-id="0"></span>
                    </div>
                    <h2 class="subtitle">Выберете тип перевозки</h2>
                    <div class="cargo_type">
                        <div class="helper">
                            <span class="glyphicon glyphicon-question-sign helper-question"></span>
                            <span class="helper-content">Тип перевозки может повлиять не её цену.</span>
                        </div>  
                        <select name="cargo_type" id="cargo_type">
                            <option value="Крытая" selected="true">Крытая</option>
                            <option value="Рефрежератор">Рефрежератор</option>
                            <option value="ADR перевозка">ADR перевозка</option>
                        </select>
                    </div>
                    <h2 class="subtitle">Введите параметры груза</h2>
                    <div class="bottom-form-inputs">
                        <div class="input-wrapper">
                            <div class="helper">
                                <span class="glyphicon glyphicon-question-sign helper-question"></span>
                                <span class="helper-content">Длина груза в метрах, от 0.1 до 13.6.</span>
                            </div>
                            <input type="text" class="required" id="l" placeholder="длина">
                        </div>
                        <div class="input-wrapper">
                            <div class="helper">
                                <span class="glyphicon glyphicon-question-sign helper-question"></span>
                                <span class="helper-content">Ширина груза в метрах, от 0.1 до 2.</span>
                            </div>
                            <input type="text" class="required" id="w" placeholder="ширина">
                        </div>
                        <div class="input-wrapper">
                            <div class="helper">
                                <span class="glyphicon glyphicon-question-sign helper-question"></span>
                                <span class="helper-content">Высота груза в метрах, от 0.1 до 3.3.</span>
                            </div>
                            <input type="text" class="required" id="h" placeholder="высота">
                        </div>
                        <div class="input-wrapper">
                            <div class="helper">
                                <span class="glyphicon glyphicon-question-sign helper-question"></span>
                                <span class="helper-content">Вес груза в тоннах, от 0.1 до 22.</span>
                            </div>
                            <input type="text" class="required" id="m"  placeholder="вес">
                        </div>
                        <div class="buttons">
                            <button id="rend" class="button">Рассчитать</button>
                            <button class="button-more modal-toggle" data-modal="modal-how">Узнать подробнее</button>
                        </div>
                    </div>
                    <div class="back">
                        <a href="/"><i class="fa fa-arrow-circle-left"></i> На главную</a>
                    </div>
                </div>
                <div class="map-form-output">
                    <h1 class="title">Результат</h1>                    
                    <h2 class="subtitle">Длина маршрута</h2>
                    <span class="output" id="output-length"></span>
                    
                    <div class="currency">
                        <h2 class="subtitle">Стоимость</h2>
                        <select name="currency" id="currency">
                            @foreach ($currencies as $currency)
                                @if (($currency->name == 'EUR')&&($currency->id == '1'))
                                <option value="{{$currency->value}}" selected="true">{{$currency->name}}</option>
                                @else
                                <option value="{{$currency->value}}">{{$currency->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <span class="output" id="output-price"></span>
                    <div class="orange-block">
                        <h2>Для уточнения условий доставки и цены оставьте заявку </h2>
                        <div class="evth-row child-on-center">
                            <div class="bottom-form-group ">
                                <i class="evth-cargo evth-cargo-tel"></i>
                                <input type="text" class="phone" id="phone_inp" placeholder="тел">
                            </div>                           
                        </div>
                        <div class="top-form-buttons">
                            <button class="button" id="phone_but">Отправить</button>                            
                        </div>
                    </div>
                    <div class="back">
                        <a href="#" id="back-to-form"><i class="fa fa-arrow-circle-left"></i> Назад к форме расчета</a>
                    </div>
                </div>                    
            </div>
            
        </div>
    </div>
<!--        <div class="col-md-4">
            <div class="form">
                <h4>Данные маршрута</h4>
                
                <div class="form-group">
                    <label class="control-label" for="end">Куда</label>
                    
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
                    
                </div>
                <div class="form-group">
                    <label class="control-label" for="l">Длина (метры): 0,1 &ndash; 13,6</label>
                    
                </div>
                <div class="form-group">
                    <label class="control-label" for="h">Высота (метры): 0,1 &ndash; 3,3</label>
                    
                </div>
                <div class="form-group">
                    <label class="control-label" for="m">Масса (тонны): 0,1 &ndash; 22</label>
                    
                </div>
            </div>  
            
            <button id="calc" class="btn btn-primary">Длина маршрута</button>
            <button id="addr" class="btn btn-success">Коды стран</button>
            <div id="output">
                <div id="dist"></div>
                <div id="country"></div>
            </div>
        </div>-->
<div class="col-md-8" style="display: none">
            
            <div class="form-group pull-right">
                <h4>Вывод</h4>                
                <textarea name="" id="textarea" cols="45" rows="20" class="form-control"></textarea>
            </div>
        </div>
<pre style="display: none">
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
        <div id="modal-how" class="modal">
        <div class="modal-wrapper">
            <div class="modal-inner">
                <span class="close">&times;</span>
                <div>
                    <h2>Как это работает?</h2>
                    <div class="row">
                        <table>
                            <tbody>
                                <tr>
                                    <td><img src="evth/public/img/modal-how-1.png" alt=""></td>
                                    <td><img src="evth/public/img/modal-how-2.png" alt=""></td>
                                    <td><img src="evth/public/img/modal-how-3.png" alt=""></td>
                                    <td><img src="evth/public/img/modal-how-4.png" alt=""></td>
                                </tr>
                                <tr>
                                    <td><h3>Выбираете маршрут</h3></td>
                                    <td><h3>Расчитываете стоимость</h3></td>
                                    <td><h3>Подтверждаете заказ</h3></td>
                                    <td><h3>Получаете груз</h3></td>
                                </tr>
                                <tr>
                                    <td><p>Указываете точку отправки и точку назначения и тип перевозки.</p></td>
                                    <td><p>Получаете предварительную оценку доставки.</p></td>
                                    <td><p>Мы связываемся с Вами для подтверждения заказа.</p></td>
                                    <td><p>Доставляем Ваш груз в назначенное место.</p></td>
                                </tr>                        
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    $('.helper').on('click', function(){
        $('.helper-content.active').removeClass('active');        
        $(this).find('.helper-content').addClass('active');
    });
    $('.helper-content').on('click', function(e){
        e.stopPropagation();
        $(this).removeClass('active');
    });
</script>
        <script>
            var lol = {
            
            };
            var rules = {                
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
                @foreach ($coeffs as $coeff)
                {{$coeff->name}}: {
                        @foreach ($coeff->rule as $rule)
                        {{$rule->letter}}:{{$rule->value}},
                        @endforeach
                    },
                @endforeach        
                
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
                    if ((this.value<rules[id].min)||(this.value>rules[id].max)||(this.value.length!==match.length)) {                        
                        mes.innerHTML = 'Недопустимое значение';
                        par.appendChild(mes);
                        par.classList.add('has-error');
                        return false;
                    }
                };
                regexp = /\+*\d+[\d-( ).^+]*/g;
                match = this.value.match(regexp);
                if (id==='phone_inp') {
                    if (!match || match.length === 0) {
                        mes.innerHTML = 'Недопустимое значение';
                        par.appendChild(mes);
                        par.classList.add('has-error');
                        return false;
                    };
                    var x = match[0];                     
                    if (x.length < this.value.length) { 
                        mes.innerHTML = 'Недопустимое значение';
                        par.appendChild(mes);
                        par.classList.add('has-error');                       
                        return false;
                    };
                    if (x.length < 7) {      
                        mes.innerHTML = 'Недопустимое значение';
                        par.appendChild(mes);
                        par.classList.add('has-error');
                        return false;
                    };
                };                
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
                    transit: []
                },                
                tr_en: false,
                tr_check: document.getElementById('add_transit'),
                mapCanvas: document.getElementById('map'),
                output: {
                    dist: 1,
                    countries: {
                        start: '',
                        end: ''
                    },
                    content: ''
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
                    m: document.getElementById('m'),
                    type: document.getElementById('cargo_type')
                },
                currency: {
                    dom: document.getElementById('currency'),
                    name: 'EUR',
                    value: 1
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
                    if ((this.cargo.h.value>rules.h.middle)&&(this.cargo.h.value<=rules.h.max)) {
                        this.coeffs.load = 1.2;
                    } else {
                        if ((this.cargo.l.value<=rules.l.max)&&(this.cargo.l.value>rules.l.e)) {
                            this.coeffs.load = 1;
                        } else if ((this.cargo.m.value>=rules.m.b)&&(this.cargo.m.value<=rules.m.max)) {
                            this.coeffs.load = 1;
                        } else if ((this.cargo.m.value<rules.m.b)&&(this.cargo.m.value>=rules.m.a)) {
                            if ((this.cargo.l.value<=rules.l.max)&&(this.cargo.l.value>rules.l.e)) {
                                this.coeffs.load = 1;
                            } else if ((this.cargo.l.value<=rules.l.e)&&(this.cargo.l.value>rules.l.d)) {
                                this.coeffs.load = 0.8;
                            } 
                        } else {
                            if ((this.cargo.l.value<=rules.l.d)&&(this.cargo.l.value>rules.l.c)) {
                                this.coeffs.load = 0.6;
                            } else if ((this.cargo.l.value<=rules.l.c)&&(this.cargo.l.value>rules.l.b)) {
                                this.coeffs.load = 0.5;
                            } else if ((this.cargo.l.value<=rules.l.b)&&(this.cargo.l.value>rules.l.a)) {
                                this.coeffs.load = 0.4;
                            } else {
                                this.coeffs.load = 0.3;
                            }
                        }
                    };
                    this.price = this.coeffs.load*this.coeffs.distance*this.coeffs.country*this.output.dist*this.currency.value;                     
                },
                showAll: function() {
                    this.render();
//                    textarea.innerHTML = 'Маршрут\nОткуда: ' + this.cities.start.value + '\n' +
//                            'Куда: ' + this.cities.end.value + '\n';
//                    if (this.tr_en) textarea.innerHTML += 'Транзит: ' + this.cities.transit.value + '\n';
//                    textarea.innerHTML += 'Длина маршрута, м: ' + this.output.dist + '\n' +
//                            'Страны: ' + this.output.countries.start + '-' + this.output.countries.end + '\n' +
//                            'Коэффициент расстояния: ' + this.coeffs.distance + '\n' +
//                            'Коэффициент страны: ' + this.coeffs.country + '\n' + 
//                            'Коэффициент груза: ' + this.coeffs.load + '\n' +
//                            'Цена: ' + this.price*0.001 + '\n';
                    this.output.content = 'Маршрут<br>Откуда: ' + this.cities.start.value + '<br>' +
                            'Куда: ' + this.cities.end.value + '<br>';
                    if (this.tr_en) {
                        for (i = 0; i < this.cities.transit.length; i++) {
                            this.output.content += 'Транзит ' + i + ': ' + this.cities.transit[i].value + '<br>';
                        };                        
                    };
                    this.output.content += 'Длина маршрута, км: ' + this.output.dist*0.001 + '<br>' +
                            'Страны: ' + this.output.countries.start + '-' + this.output.countries.end + '<br>' +
                            'Коэффициент расстояния: ' + this.coeffs.distance + '<br>' +
                            'Коэффициент страны: ' + this.coeffs.country + '<br>' + 
                            'Коэффициент груза: ' + this.coeffs.load + '<br>' +
                            'Тип перевозки: ' + this.cargo.type.value + '<br>' +
                            'Цена: ' + this.price*0.001 + ' ' + this.currency.name;                    
                    var outs = {
                        price: document.getElementById('output-price'),
                        length: document.getElementById('output-length')
                    };
                    outs.length.innerHTML = Math.round(this.output.dist*0.001).toLocaleString() + ' км';
                    outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.0001)+ ' до ' +Math.round(this.price*0.001+this.price*0.0001) + ' ' + this.currency.name;
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
            $(data.currency.dom).selectmenu({
                change: function(e, ui){
                    data.currency.value = $(this).val();
                    data.currency.name = $(this).find(':selected').text();
                    data.showAll();
                }
            });
//            $(data.currency.dom).on('change', function(){
//                data.currency.value = $(this).val();
//                data.currency.name = $(this).find(':selected').text();                
//                data.showAll();
//            });
            function initialize(data) {
                var styles = [
                    {
                        featureType:"administrative",
                        elementType:"labels.text.fill",
                        stylers:[{
                                color:"#444444"
                        }]
                    },
                    {
                        featureType:"landscape",
                        elementType:"all",
                        stylers:[{
                            color:"#f2f2f2"
                        }]
                    },
                    {
                        featureType:"poi",
                        elementType:"all",
                        stylers:[{
                            visibility:"off"
                        }]
                    },
                    {
                        featureType:"road",
                        elementType:"all",
                        stylers:[
                            {saturation:-100},
                            {lightness:45}
                        ]
                    },
                    {
                        featureType:"road.highway",
                        elementType:"all",
                        stylers:[{
                            visibility:"simplified"
                        }]
                    },
                    {
                        featureType:"road.arterial",
                        elementType:"labels.icon",
                        stylers:[{
                            visibility:"off"
                        }]
                    },
                    {
                        featureType:"transit",
                        elementType:"all",
                        stylers:[{
                            visibility:"off"
                        }]
                    },
                    {
                        featureType:"water",
                        elementType:"all",
                        stylers:[
                            {color:"#e16f0e"},
                            {visibility:"on"}
                        ]
                    }
                ];
                var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});
                var mapOptions = {
                    center: new google.maps.LatLng(53.423956, 20.338401),
                    zoom: 4,
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']                                       
                };               
                var map = new google.maps.Map(data.mapCanvas, mapOptions);
                map.mapTypes.set('map_style', styledMap);
                map.setMapTypeId('map_style');
                var acOptions = {
                    types: ['(cities)']
                };                
                data.directionsDisplay.setMap(map);
                data.autocomplete.start = new google.maps.places.Autocomplete(data.cities.start,acOptions);
                data.autocomplete.end = new google.maps.places.Autocomplete(data.cities.end,acOptions);                
//                var tr_count = parseInt(data.tr_check.getAttribute('data-id'));
//                if (tr_count > 0) {
//                    var inputs = document.querySelectorAll('.transit input');
//                    for (var i = 0; i <inputs.length; i++ ) {
//                        inputs[i] = new google.maps.places.Autocomplete(data.cities.transit,acOptions);
//                    }
//                }                
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
                    var wpts = [];
                    for (var i = 0; i < data.cities.transit.length; i++) {
                        wpts.push({
                            location: data.cities.transit[i].value,
                            stopover: true
                        });
                    };
                    request.waypoints = wpts;
//                    request.waypoints = [{
//                            location: data.cities.transit.value,
//                            stopover: true
//                    }]
                };
                data.directionsService.route(request, function(result, status) {
                    if (status == google.maps.DirectionsStatus.OK) {
                        data.directionsDisplay.setDirections(result);
                        var dist = 0;
                        var leg = result.routes[0].legs;
//                        console.log(result.routes[0].overview_path);
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
              function ajaxOrder() {
                  var xhr, body, box;
                  box = document.querySelector('.orange-block');
                  xhr = new XMLHttpRequest();
                  xhr.open('POST', '/order', true);
                  xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                  body = 'phone=' + phone_inp.value + '&content='+ data.output.content;
                  xhr.send(body);
                  xhr.onreadystatechange = function (){
                      if (xhr.readyState != 4) return;
                      if (xhr.responseText==='saved') {
                          box.innerHTML = '<h2>Заявка принята! Наши менеджеры свяжутся с вами в ближайшее время!</h2>';
                      } else {
                          box.innerHTML = '<h2>Что-то пошло не так... Просто позвоните нам по телефону на главной странице!</h2>'
                      }
                      
                  };
                  box.innerHTML = '<h2>Секундочку...</h2>';
              }
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
//            var calc = document.getElementById('calc');
//            var addr = document.getElementById('addr');
            var add_transit, del_transit;
            add_transit = document.getElementById('add_transit');
            del_transit = document.getElementById('del_transit');
            add_transit.addEventListener('click', function(){
                data.tr_en = true;
                var data_id = parseInt($(this).attr('data-id'));
                if (data_id>4) return;                
                var tr = document.querySelector('.transit');
                var inp = document.createElement('input');
                var div = document.createElement('div');                                
                $(inp).attr({
                    type: 'text',
                    class: 'required',
                    id: 'transit_'+data_id,
                    placeholder: 'Транзитный город '+(data_id+1),
                });
                $(div).attr('class','input-wrapper');
                div.appendChild(inp);
                tr.appendChild(div);
                data.cities.transit.push(inp);
                temp = new google.maps.places.Autocomplete(inp,{types: ['(cities)']});
                $(this).attr('data-id', data_id+1);    
                $('.map-forms-wrapper').css('height', ($('.map-forms-wrapper').height() + 34) + 'px' )
                if (data_id>-1) {
                    $(del_transit).css('display', 'inline-block');
                } else {
                    $(del_transit).css('display', 'none');
                }
            });
            del_transit.addEventListener('click', function(){
                var div, inp, id, data_id;
                div = document.querySelectorAll('.transit .input-wrapper');
                div = div[div.length-1];
                inp = div.querySelector('input');
                id = inp.getAttribute('id');
                data.cities.transit.pop();
                div.remove();
                data_id = parseInt($(add_transit).attr('data-id'));
                $(add_transit).attr('data-id', data_id-1);
                $('.map-forms-wrapper').css('height', ($('.map-forms-wrapper').height() - 34) + 'px' )
                if(data_id < 2) {
                    $(this).css('display', 'none');
                    data.tr_en = false;
                }
            });
            var rend = document.getElementById('rend');
            var inputs = document.getElementsByClassName('required');
            for (var i = 0; i < inputs.length; i++) {
                inputs[i].addEventListener('focus',function(){
                    var par = this.parentNode;
                    var mes = par.querySelector('.message');                    
                    if (mes!==null) par.removeChild(mes);
                    par.classList.remove('has-error');
                });
                inputs[i].addEventListener('blur',function(){
                    validate.call(this);
                });
            };
//            calc.addEventListener('click', function(){
//               calcRoute(function(dist){
//                   data.output.dist = dist;
//                   document.getElementById('dist').innerHTML = dist;
//                   data.render();
//               }); 
//            });
//            addr.addEventListener('click', function(){
//               codeAddress(data);
//               document.getElementById('country').innerHTML = data.output.country;
//            });
//            addr.addEventListener('click', function(){
//               
//            });
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
                $('.map-form-input').fadeOut(200, function(){                    
                    $('.map-form-output').fadeIn();
                });                
            });
            
            var phone_but, phone_inp;
            phone_but = document.getElementById('phone_but');
            phone_inp = document.getElementById('phone_inp');
            phone_inp.addEventListener('blur', function(){
                validate.call(this);
            });
            phone_inp.addEventListener('focus',function(){
                var par = this.parentNode;
                var mes = par.querySelector('.message');                    
                if (mes!==null) par.removeChild(mes);
                par.classList.remove('has-error');
            });
            phone_but.addEventListener('click', function(){
               if (!validate.call(phone_inp)) return;
               ajaxOrder();
            });
            $('#back-to-form').on('click', function(e){
                e.preventDefault();
                $('.map-form-output').fadeOut(200, function(){                    
                    $('.map-form-input').fadeIn();
                });
            })
        </script>
<script src="evth/public/js/ready.js"></script>
<script src="evth/public/js/dragonmap.js"></script>
    </body>
</html>
