<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        @if (($inputs['start']!='')&&($inputs['end']!=''))
        <title>Доставить груз из {{$inputs['start']}} в {{$inputs['end']}} стоимость, цена перевозки, цены доставки</title>
        <meta name="description" content="Привозка груза из {{$inputs['start']}} в {{$inputs['end']}} узнай стоимость за 30 секунд">
        @else
        <title>Rate&Go калькулятор расчета</title>
        <meta name="description" content="">
        @endif
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon-precomposed" href="evth/public/img/fav-01.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="evth/public/img/fav-02.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="evth/public/img/fav-03.jpg">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="evth/public/img/fav-04.jpg">
        <link rel="stylesheet" href="evth/public/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="evth/public/bootstrap-switch/css/bootstrap-switch.css">
        <link rel="stylesheet" href="evth/public/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha256-k2/8zcNbxVIh5mnQ52A0r3a6jAgMGxFJFE2707UxGCk= sha512-ZV9KawG2Legkwp3nAlxLIVFudTauWuBpC10uEafMHYL0Sarrz5A7G79kXh5+5+woxQ5HM559XX2UZjMJ36Wplg==" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
        <script src="evth/public/bootstrap-switch/js/bootstrap-switch.js"></script>
<!--        <style>
            #map {
                width: inherit;
                height: inherit;
            }
        </style>-->
    </head>
    <body id="map-page">
    <div class="overlay">

        <div class="map-wrapper">
            <div class="map" id="map"></div>
            <div class="map-forms-wrapper">
                <div class="map-form-input">
                    <div class="logo-on-map">
                    <a href="/">
                        <svg version="1.1" class="logo-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 147 29" enable-background="new 0 0 147 29" xml:space="preserve">
                        <g>
                            <g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M37.7,5.7c4.9,0,7.3,3.2,7.3,6.6c0,3.3-2.1,6.1-5.7,6.4l7.4,8.7l-2.1,1.1l-9.2-11.1h-0.1v10.6l-2.2,0.3
                                                    V5.7H37.7z M35.2,17.1h2.7c2.7,0,4.7-2.1,4.7-4.7c0-2.4-1.7-4.6-4.8-4.6h-2.6V17.1z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M49.5,12.1c1.1-0.4,2.7-0.9,4.5-0.9c5.7,0,5.8,4.2,5.8,5.1v11.5l-1.9,0.4V26h-0.1c-1.1,1.8-3,2.3-4.7,2.3
                                                    c-3.2,0-6-2.2-6-5.9c0-3.8,3.1-5.8,6-5.8c1.5,0,3.3,0.5,4.6,2h0.1v-2.5c0-1.8-1.6-3.1-3.9-3.1c-1.5,0-3.1,0.5-4.3,1l-0.9,0.4
                                                    L49.5,12.1z M49.2,22.3c0,2,1.3,4.2,4.3,4.2c2.9,0,4.4-1.9,4.4-4c0-2-1.5-4.1-4.6-4.1C50.7,18.4,49.2,20.3,49.2,22.3z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M63.9,7.7l2-1v5h4.4v1.8h-4.4v10.1c0,1.1,0.1,2.9,2.9,2.9c0.5,0,0.8-0.1,1.5-0.4V28
                                                    c-0.6,0.2-1.3,0.3-2,0.3c-2.4,0-4.4-1.3-4.4-4.6V13.5h-2.2l0.5-1.8h1.7V7.7z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M86.3,25.9c-1.6,1.4-3.7,2.4-6.3,2.4c-5.8,0-8.6-4.7-8.6-8.6c0-4.7,3.6-8.5,8.4-8.5
                                                    c2.5,0,5.2,1.1,6.9,3.9l-12.5,7.5c1.1,2.4,3.5,3.7,5.7,3.7c2.3,0,4.8-1.3,6.4-2.9V25.9z M83.9,14.7c-0.9-0.9-2.2-1.6-4.1-1.6
                                                    c-2.9,0-6.4,2.1-6.4,6.4c0,0.5,0.1,0.9,0.2,1.4L83.9,14.7z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M101,20.9l3.9-3.9l1.5,1.5l-4.1,4.1l4,4.6l-1.8,1.2l-3.6-4.4l-1.2,1.2c-1.7,1.7-3,3.2-5.5,3.2
                                                    c-3.2,0-5.6-2.4-5.6-5.6c0-3.1,2-4.6,3.5-6l1.6-1.5c-1.9-2.4-2.1-4.2-2.1-5.1c0-3,2.1-5,5-5c2.8,0,4.5,2.1,4.5,4.1
                                                    c0,2.3-1.8,3.8-3.3,5.2l-1.1,1L101,20.9z M94.9,16.8l-1.4,1.3c-1.2,1.1-2.9,2.5-2.9,4.7c0,2.2,2,3.4,3.5,3.4
                                                    c1.8,0,3.2-1.7,4.2-2.7l1.2-1.2L94.9,16.8z M95.6,13.7c1.3-1,3.1-2.6,3.1-4.5c0-1.6-1.6-2.1-2.5-2.1c-1.4,0-2.7,1.1-2.7,3.1
                                                    c0,1.3,0.6,2.7,1.6,3.9L95.6,13.7z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M126.3,9.8c-1.4-1.3-3.6-2.6-6.5-2.6c-4.9,0-9.3,3.9-9.3,9.7c0,4.6,3.5,9.4,9.5,9.4c2,0,4-0.6,5.9-2V18
                                                    h-7.4l0.7-2.1h9v9.4c-3.2,2.7-6.4,3-8.3,3c-7.7,0-11.8-6-11.8-11.4c0-5.8,4.2-11.8,11.7-11.8c2.3,0,5.1,0.6,7.8,2.9L126.3,9.8z"
                                                    />
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M138.9,11.3c4.7,0,8.5,3.8,8.5,8.5c0,4.7-3.8,8.5-8.5,8.5c-4.7,0-8.5-3.8-8.5-8.5
                                                    C130.4,15.1,134.3,11.3,138.9,11.3z M138.9,26.5c3.6,0,6.4-3.1,6.4-6.7c0-3.7-2.9-6.7-6.4-6.7c-3.5,0-6.4,3-6.4,6.7
                                                    C132.5,23.5,135.4,26.5,138.9,26.5z"/>
                                    </g>
                            </g>
                            <g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M26.4,28.7H2.1c-1.2,0-2.1-0.9-2.1-2.1V2.3c0-1.2,0.9-2.1,2.1-2.1h24.3c1.2,0,2.1,0.9,2.1,2.1v24.3
                                                    C28.5,27.8,27.5,28.7,26.4,28.7z M2.1,0.9c-0.8,0-1.5,0.7-1.5,1.5v24.3c0,0.8,0.7,1.5,1.5,1.5h24.3c0.8,0,1.5-0.7,1.5-1.5V2.3
                                                    c0-0.8-0.7-1.5-1.5-1.5H2.1z"/>
                                    </g>
                                    <g>
                                            <polygon fill="#fff" class="orange-path" points="6.6,20.4 3.8,20.4 3.8,22 6.6,22 6.6,24.8 8.2,24.8 8.2,22 11.1,22 11.1,20.4 8.2,20.4 8.2,17.6
                                                    6.6,17.6 			"/>
                                    </g>
                                    <g>
                                            <polygon fill="#fff" class="orange-path" points="10.6,9.4 8.6,7.4 10.6,5.4 9.4,4.3 7.5,6.2 5.4,4.3 4.3,5.4 6.3,7.4 4.3,9.4 5.4,10.5 7.5,8.5
                                                    9.4,10.5 			"/>
                                    </g>
                                    <g>
                                            <g>
                                                    <rect x="17.2" y="6.6" fill="#fff" class="orange-path" width="7.2" height="1.6"/>
                                            </g>
                                            <g>
                                                    <rect x="20" y="9.4" fill="#fff" class="orange-path" width="1.6" height="1.6"/>
                                            </g>
                                            <g>
                                                    <rect x="20" y="3.8" fill="#fff" class="orange-path" width="1.6" height="1.6"/>
                                            </g>
                                    </g>
                                    <g>
                                            <rect x="0.5" y="14.5" fill="#fff" class="violet-path" width="11.5" height="0.7"/>
                                    </g>
                                    <g>
                                            <rect x="13.9" y="0.6" fill="#fff" class="violet-path" width="0.7" height="12.3"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M22.6,14.9h-3h-0.1c-2.7,0-4.8,2.2-4.9,4.9v0.1v3V28h-0.9v-8.1c0-1.1,0.3-2.1,0.9-3
                                                    c0.5-0.8,1.1-1.4,1.9-1.9c0.9-0.5,1.9-0.9,3-0.9h0h0h8.1v0.9H22.6z"/>
                                            <path fill="#fff" class="violet-path" d="M15.3,28.6h-2.1v-8.8c0-1.2,0.3-2.3,0.9-3.3c0.5-0.9,1.3-1.6,2.1-2.1c1-0.6,2.2-0.9,3.3-0.9h8.8v2.1h-8.8
                                                    c-2.3,0-4.2,1.9-4.3,4.3V28.6z"/>
                                    </g>
                            </g>
                            <g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M23.9,21.5c0.3-1,0.1-2.1-0.6-2.8c-1.1-1.1-2.8-1.1-3.8,0c-0.8,0.8-1,1.9-0.6,2.8c0.7,2,2.6,4,2.6,4
                                                    S23.1,23.6,23.9,21.5L23.9,21.5z M21.9,21.4c-0.3,0.3-0.8,0.3-1.2,0c-0.3-0.3-0.3-0.8,0-1.2c0.3-0.3,0.8-0.3,1.2,0
                                                    C22.2,20.6,22.2,21.1,21.9,21.4z"/>
                                    </g>
                            </g>
                    </g>
                    </svg>
                    </a>
                </div>
                    <div class="form-header">

                        <h1 class="title">
                            <div class="show-form"><i class="fa fa-eye-slash"></i></div>
                            Форма заявки
                            <div class="helper">
                                <span class="glyphicon glyphicon-question-sign helper-question"></span>
                                <span class="helper-content">Заполните эту форму и нажмите "Рассчитать".</span>
                            </div>
                        </h1>

                    </div>
                    <span class="subtitle">Введите города</span>
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
                    <span class="subtitle">Добавить транзитный город</span>
                    <div class="transit">
                        <span class="glyphicon glyphicon-plus-sign" id="add_transit" data-id="0"></span>
                        <span class="glyphicon glyphicon-minus-sign" id="del_transit" data-id="0"></span>
                    </div>
                    <span class="subtitle">Выберете тип перевозки</span>
                    <div class="cargotype">
                        <div class="helper">
                            <span class="glyphicon glyphicon-question-sign helper-question"></span>
                            <span class="helper-content">Тип перевозки может повлиять не её цену.</span>
                        </div>
                        <select name="cargotype" id="cargotype">
                            @foreach ($cargotypes as $cargotype)
                                <option value="{{$cargotype->value}}">{{$cargotype->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <span class="subtitle">Выберете тип транспорта</span>
                    <div class="radio-group">
                        <input type="radio" name="road_type" value="ROADS" data-title="Авто" data-label="<span><i class='fa fa-truck'></i></span>Авто">
                        <input type="radio" name="road_type" value="TRANSIT" data-title="Ж/Д" data-label="<span><i class='fa fa-train'></i></span>Ж/д">
                        <input type="radio" name="road_type" value="AVIA" data-title="Авиа" data-label="<span><i class='fa fa-plane'></i></span>Авиа">
                        <input type="radio" name="road_type" value="MARINE" data-title="Морской" data-label="<span><i class='fa fa-ship'></i></span>Морской">
                    </div>
                    <div class="cargo-params">
                    <span class="subtitle">Введите параметры груза</span>
                    <div class="bottom-form-inputs">
                        <div class="load-params__input-wrapper">
                            <label for="l">Длина, м (от 0,1 до 16)</label>
                            <div class="helper">
                                <span class="glyphicon glyphicon-question-sign helper-question"></span>
                                <span class="helper-content">Длина от 0.1 м до 16 м (метры).</span>
                            </div>
                            <input type="text" class="required" id="l" >
                        </div>
                        <div class="load-params__input-wrapper">
                            <label for="w">Ширина, м (от 0,1 до 2,5)</label>
                            <div class="helper">
                                <span class="glyphicon glyphicon-question-sign helper-question"></span>
                                <span class="helper-content">Ширина от 0.1 м до 2.5 м (метры).</span>
                            </div>
                            <input type="text" class="required" id="w" >
                        </div>
                        <div class="load-params__input-wrapper">
                            <label for="h">Высота, м (от 0,1 до 3,3)</label>
                            <div class="helper">
                                <span class="glyphicon glyphicon-question-sign helper-question"></span>
                                <span class="helper-content">Высота от 0.1 м до 3.3 м (метры).</span>
                            </div>
                            <input type="text" class="required" id="h">
                        </div>
                        <div class="load-params__input-wrapper">
                            <label for="m">Вес, т (от 0,1 до 22)</label>
                            <div class="helper">
                                <span class="glyphicon glyphicon-question-sign helper-question"></span>
                                <span class="helper-content">Вес от 0.1 т до 22 т (тонны).</span>
                            </div>
                            <input type="text" class="required" id="m" >
                        </div>
                        <div class="buttons">
                            <button id="rend" class="button" onclick="ga('send','pageview', '/virtual/raschet');">Рассчитать</button>
                            <button class="button-more modal-toggle" data-modal="modal-how">Узнать подробнее</button>
                        </div>
                    </div>
                    </div>
                    <div class="please-register">
                        <div class="violet-rhombus"></div>
                        <span>Калькулятор для этого вида транспорта находится в<br>разработке.</span>
                        <div class="please-register__content">
                            <p class="please-register__text">Он будет доступен только зарегистрированным пользователям</p>
                            <div class="please-register__table">
                                <div class="please-register__left">за <strong class="big">$9,0</strong></div>
                                <div class="please-register__right">в месяц или<br>сейчас бесплатно*</div>
                            </div>
                            <a href="sing-up">Зарегистрироваться</a>
                            <p class="please-register__bull-shit">*До 1.01.2016 регистрация БЕСПЛАТНО</p>
                        </div>
                    </div>
                    <div class="back">
                        <a href="/"><i class="fa fa-arrow-circle-left"></i> На главную</a>
                    </div>
                </div>
                <div class="map-form-output">
                    <div class="logo-on-map">
                    <a href="/">
                        <svg version="1.1" class="logo-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 147 29" enable-background="new 0 0 147 29" xml:space="preserve">
                        <g>
                            <g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M37.7,5.7c4.9,0,7.3,3.2,7.3,6.6c0,3.3-2.1,6.1-5.7,6.4l7.4,8.7l-2.1,1.1l-9.2-11.1h-0.1v10.6l-2.2,0.3
                                                    V5.7H37.7z M35.2,17.1h2.7c2.7,0,4.7-2.1,4.7-4.7c0-2.4-1.7-4.6-4.8-4.6h-2.6V17.1z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M49.5,12.1c1.1-0.4,2.7-0.9,4.5-0.9c5.7,0,5.8,4.2,5.8,5.1v11.5l-1.9,0.4V26h-0.1c-1.1,1.8-3,2.3-4.7,2.3
                                                    c-3.2,0-6-2.2-6-5.9c0-3.8,3.1-5.8,6-5.8c1.5,0,3.3,0.5,4.6,2h0.1v-2.5c0-1.8-1.6-3.1-3.9-3.1c-1.5,0-3.1,0.5-4.3,1l-0.9,0.4
                                                    L49.5,12.1z M49.2,22.3c0,2,1.3,4.2,4.3,4.2c2.9,0,4.4-1.9,4.4-4c0-2-1.5-4.1-4.6-4.1C50.7,18.4,49.2,20.3,49.2,22.3z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M63.9,7.7l2-1v5h4.4v1.8h-4.4v10.1c0,1.1,0.1,2.9,2.9,2.9c0.5,0,0.8-0.1,1.5-0.4V28
                                                    c-0.6,0.2-1.3,0.3-2,0.3c-2.4,0-4.4-1.3-4.4-4.6V13.5h-2.2l0.5-1.8h1.7V7.7z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M86.3,25.9c-1.6,1.4-3.7,2.4-6.3,2.4c-5.8,0-8.6-4.7-8.6-8.6c0-4.7,3.6-8.5,8.4-8.5
                                                    c2.5,0,5.2,1.1,6.9,3.9l-12.5,7.5c1.1,2.4,3.5,3.7,5.7,3.7c2.3,0,4.8-1.3,6.4-2.9V25.9z M83.9,14.7c-0.9-0.9-2.2-1.6-4.1-1.6
                                                    c-2.9,0-6.4,2.1-6.4,6.4c0,0.5,0.1,0.9,0.2,1.4L83.9,14.7z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M101,20.9l3.9-3.9l1.5,1.5l-4.1,4.1l4,4.6l-1.8,1.2l-3.6-4.4l-1.2,1.2c-1.7,1.7-3,3.2-5.5,3.2
                                                    c-3.2,0-5.6-2.4-5.6-5.6c0-3.1,2-4.6,3.5-6l1.6-1.5c-1.9-2.4-2.1-4.2-2.1-5.1c0-3,2.1-5,5-5c2.8,0,4.5,2.1,4.5,4.1
                                                    c0,2.3-1.8,3.8-3.3,5.2l-1.1,1L101,20.9z M94.9,16.8l-1.4,1.3c-1.2,1.1-2.9,2.5-2.9,4.7c0,2.2,2,3.4,3.5,3.4
                                                    c1.8,0,3.2-1.7,4.2-2.7l1.2-1.2L94.9,16.8z M95.6,13.7c1.3-1,3.1-2.6,3.1-4.5c0-1.6-1.6-2.1-2.5-2.1c-1.4,0-2.7,1.1-2.7,3.1
                                                    c0,1.3,0.6,2.7,1.6,3.9L95.6,13.7z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M126.3,9.8c-1.4-1.3-3.6-2.6-6.5-2.6c-4.9,0-9.3,3.9-9.3,9.7c0,4.6,3.5,9.4,9.5,9.4c2,0,4-0.6,5.9-2V18
                                                    h-7.4l0.7-2.1h9v9.4c-3.2,2.7-6.4,3-8.3,3c-7.7,0-11.8-6-11.8-11.4c0-5.8,4.2-11.8,11.7-11.8c2.3,0,5.1,0.6,7.8,2.9L126.3,9.8z"
                                                    />
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M138.9,11.3c4.7,0,8.5,3.8,8.5,8.5c0,4.7-3.8,8.5-8.5,8.5c-4.7,0-8.5-3.8-8.5-8.5
                                                    C130.4,15.1,134.3,11.3,138.9,11.3z M138.9,26.5c3.6,0,6.4-3.1,6.4-6.7c0-3.7-2.9-6.7-6.4-6.7c-3.5,0-6.4,3-6.4,6.7
                                                    C132.5,23.5,135.4,26.5,138.9,26.5z"/>
                                    </g>
                            </g>
                            <g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M26.4,28.7H2.1c-1.2,0-2.1-0.9-2.1-2.1V2.3c0-1.2,0.9-2.1,2.1-2.1h24.3c1.2,0,2.1,0.9,2.1,2.1v24.3
                                                    C28.5,27.8,27.5,28.7,26.4,28.7z M2.1,0.9c-0.8,0-1.5,0.7-1.5,1.5v24.3c0,0.8,0.7,1.5,1.5,1.5h24.3c0.8,0,1.5-0.7,1.5-1.5V2.3
                                                    c0-0.8-0.7-1.5-1.5-1.5H2.1z"/>
                                    </g>
                                    <g>
                                            <polygon fill="#fff" class="orange-path" points="6.6,20.4 3.8,20.4 3.8,22 6.6,22 6.6,24.8 8.2,24.8 8.2,22 11.1,22 11.1,20.4 8.2,20.4 8.2,17.6
                                                    6.6,17.6 			"/>
                                    </g>
                                    <g>
                                            <polygon fill="#fff" class="orange-path" points="10.6,9.4 8.6,7.4 10.6,5.4 9.4,4.3 7.5,6.2 5.4,4.3 4.3,5.4 6.3,7.4 4.3,9.4 5.4,10.5 7.5,8.5
                                                    9.4,10.5 			"/>
                                    </g>
                                    <g>
                                            <g>
                                                    <rect x="17.2" y="6.6" fill="#fff" class="orange-path" width="7.2" height="1.6"/>
                                            </g>
                                            <g>
                                                    <rect x="20" y="9.4" fill="#fff" class="orange-path" width="1.6" height="1.6"/>
                                            </g>
                                            <g>
                                                    <rect x="20" y="3.8" fill="#fff" class="orange-path" width="1.6" height="1.6"/>
                                            </g>
                                    </g>
                                    <g>
                                            <rect x="0.5" y="14.5" fill="#fff" class="violet-path" width="11.5" height="0.7"/>
                                    </g>
                                    <g>
                                            <rect x="13.9" y="0.6" fill="#fff" class="violet-path" width="0.7" height="12.3"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M22.6,14.9h-3h-0.1c-2.7,0-4.8,2.2-4.9,4.9v0.1v3V28h-0.9v-8.1c0-1.1,0.3-2.1,0.9-3
                                                    c0.5-0.8,1.1-1.4,1.9-1.9c0.9-0.5,1.9-0.9,3-0.9h0h0h8.1v0.9H22.6z"/>
                                            <path fill="#fff" class="violet-path" d="M15.3,28.6h-2.1v-8.8c0-1.2,0.3-2.3,0.9-3.3c0.5-0.9,1.3-1.6,2.1-2.1c1-0.6,2.2-0.9,3.3-0.9h8.8v2.1h-8.8
                                                    c-2.3,0-4.2,1.9-4.3,4.3V28.6z"/>
                                    </g>
                            </g>
                            <g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M23.9,21.5c0.3-1,0.1-2.1-0.6-2.8c-1.1-1.1-2.8-1.1-3.8,0c-0.8,0.8-1,1.9-0.6,2.8c0.7,2,2.6,4,2.6,4
                                                    S23.1,23.6,23.9,21.5L23.9,21.5z M21.9,21.4c-0.3,0.3-0.8,0.3-1.2,0c-0.3-0.3-0.3-0.8,0-1.2c0.3-0.3,0.8-0.3,1.2,0
                                                    C22.2,20.6,22.2,21.1,21.9,21.4z"/>
                                    </g>
                            </g>
                    </g>
                    </svg>
                    </a>
                </div>
                    <h1 class="title">Результат</h1>
                    <span class="subtitle">Длина маршрута</span>
                    <span class="output" id="output-length"></span>
                    <div class="currency">
                        <span class="subtitle">Стоимость</span>
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
                        <div id="ajax-inputs">
                            <h1>Оставьте заявку сейчас</h1>
                            <span>и получите годовую страховку в Подарок!</span>
                            <div class="evth-row child-on-center">
                                <div class="bottom-form-group ">
                                    <i class="fa fa-envelope-square"></i>
                                    <input type="text" class="email" id="email_inp" placeholder="email">
                                </div>
                                <div class="bottom-form-group ">
                                    <i class="fa fa-phone-square"></i>
                                    <input type="text" class="phone" id="phone_inp" placeholder="тел">
                                </div>
                            </div>
                            <div class="top-form-buttons">
                                <button class="button" id="phone_but" onclick="ga('send','pageview', '/virtual/otpravili');">Оставить заявку</button>
                            </div>
                        </div>
                    </div>
                    <div class="back">
                        <a href="#" id="back-to-form"><i class="fa fa-arrow-circle-left"></i> Назад к форме расчета</a>
                    </div>
                </div>
            </div>
            <!--Composer view for unsigned users-->
                @include('composers.sign')
                <!--End of composer view for unsigned users-->
                <div class="logo-on-map">
                    <a href="/">
                        <svg version="1.1" class="logo-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 147 29" enable-background="new 0 0 147 29" xml:space="preserve">
                        <g>
                            <g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M37.7,5.7c4.9,0,7.3,3.2,7.3,6.6c0,3.3-2.1,6.1-5.7,6.4l7.4,8.7l-2.1,1.1l-9.2-11.1h-0.1v10.6l-2.2,0.3
                                                    V5.7H37.7z M35.2,17.1h2.7c2.7,0,4.7-2.1,4.7-4.7c0-2.4-1.7-4.6-4.8-4.6h-2.6V17.1z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M49.5,12.1c1.1-0.4,2.7-0.9,4.5-0.9c5.7,0,5.8,4.2,5.8,5.1v11.5l-1.9,0.4V26h-0.1c-1.1,1.8-3,2.3-4.7,2.3
                                                    c-3.2,0-6-2.2-6-5.9c0-3.8,3.1-5.8,6-5.8c1.5,0,3.3,0.5,4.6,2h0.1v-2.5c0-1.8-1.6-3.1-3.9-3.1c-1.5,0-3.1,0.5-4.3,1l-0.9,0.4
                                                    L49.5,12.1z M49.2,22.3c0,2,1.3,4.2,4.3,4.2c2.9,0,4.4-1.9,4.4-4c0-2-1.5-4.1-4.6-4.1C50.7,18.4,49.2,20.3,49.2,22.3z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M63.9,7.7l2-1v5h4.4v1.8h-4.4v10.1c0,1.1,0.1,2.9,2.9,2.9c0.5,0,0.8-0.1,1.5-0.4V28
                                                    c-0.6,0.2-1.3,0.3-2,0.3c-2.4,0-4.4-1.3-4.4-4.6V13.5h-2.2l0.5-1.8h1.7V7.7z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="orange-path" d="M86.3,25.9c-1.6,1.4-3.7,2.4-6.3,2.4c-5.8,0-8.6-4.7-8.6-8.6c0-4.7,3.6-8.5,8.4-8.5
                                                    c2.5,0,5.2,1.1,6.9,3.9l-12.5,7.5c1.1,2.4,3.5,3.7,5.7,3.7c2.3,0,4.8-1.3,6.4-2.9V25.9z M83.9,14.7c-0.9-0.9-2.2-1.6-4.1-1.6
                                                    c-2.9,0-6.4,2.1-6.4,6.4c0,0.5,0.1,0.9,0.2,1.4L83.9,14.7z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M101,20.9l3.9-3.9l1.5,1.5l-4.1,4.1l4,4.6l-1.8,1.2l-3.6-4.4l-1.2,1.2c-1.7,1.7-3,3.2-5.5,3.2
                                                    c-3.2,0-5.6-2.4-5.6-5.6c0-3.1,2-4.6,3.5-6l1.6-1.5c-1.9-2.4-2.1-4.2-2.1-5.1c0-3,2.1-5,5-5c2.8,0,4.5,2.1,4.5,4.1
                                                    c0,2.3-1.8,3.8-3.3,5.2l-1.1,1L101,20.9z M94.9,16.8l-1.4,1.3c-1.2,1.1-2.9,2.5-2.9,4.7c0,2.2,2,3.4,3.5,3.4
                                                    c1.8,0,3.2-1.7,4.2-2.7l1.2-1.2L94.9,16.8z M95.6,13.7c1.3-1,3.1-2.6,3.1-4.5c0-1.6-1.6-2.1-2.5-2.1c-1.4,0-2.7,1.1-2.7,3.1
                                                    c0,1.3,0.6,2.7,1.6,3.9L95.6,13.7z"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M126.3,9.8c-1.4-1.3-3.6-2.6-6.5-2.6c-4.9,0-9.3,3.9-9.3,9.7c0,4.6,3.5,9.4,9.5,9.4c2,0,4-0.6,5.9-2V18
                                                    h-7.4l0.7-2.1h9v9.4c-3.2,2.7-6.4,3-8.3,3c-7.7,0-11.8-6-11.8-11.4c0-5.8,4.2-11.8,11.7-11.8c2.3,0,5.1,0.6,7.8,2.9L126.3,9.8z"
                                                    />
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M138.9,11.3c4.7,0,8.5,3.8,8.5,8.5c0,4.7-3.8,8.5-8.5,8.5c-4.7,0-8.5-3.8-8.5-8.5
                                                    C130.4,15.1,134.3,11.3,138.9,11.3z M138.9,26.5c3.6,0,6.4-3.1,6.4-6.7c0-3.7-2.9-6.7-6.4-6.7c-3.5,0-6.4,3-6.4,6.7
                                                    C132.5,23.5,135.4,26.5,138.9,26.5z"/>
                                    </g>
                            </g>
                            <g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M26.4,28.7H2.1c-1.2,0-2.1-0.9-2.1-2.1V2.3c0-1.2,0.9-2.1,2.1-2.1h24.3c1.2,0,2.1,0.9,2.1,2.1v24.3
                                                    C28.5,27.8,27.5,28.7,26.4,28.7z M2.1,0.9c-0.8,0-1.5,0.7-1.5,1.5v24.3c0,0.8,0.7,1.5,1.5,1.5h24.3c0.8,0,1.5-0.7,1.5-1.5V2.3
                                                    c0-0.8-0.7-1.5-1.5-1.5H2.1z"/>
                                    </g>
                                    <g>
                                            <polygon fill="#fff" class="orange-path" points="6.6,20.4 3.8,20.4 3.8,22 6.6,22 6.6,24.8 8.2,24.8 8.2,22 11.1,22 11.1,20.4 8.2,20.4 8.2,17.6
                                                    6.6,17.6 			"/>
                                    </g>
                                    <g>
                                            <polygon fill="#fff" class="orange-path" points="10.6,9.4 8.6,7.4 10.6,5.4 9.4,4.3 7.5,6.2 5.4,4.3 4.3,5.4 6.3,7.4 4.3,9.4 5.4,10.5 7.5,8.5
                                                    9.4,10.5 			"/>
                                    </g>
                                    <g>
                                            <g>
                                                    <rect x="17.2" y="6.6" fill="#fff" class="orange-path" width="7.2" height="1.6"/>
                                            </g>
                                            <g>
                                                    <rect x="20" y="9.4" fill="#fff" class="orange-path" width="1.6" height="1.6"/>
                                            </g>
                                            <g>
                                                    <rect x="20" y="3.8" fill="#fff" class="orange-path" width="1.6" height="1.6"/>
                                            </g>
                                    </g>
                                    <g>
                                            <rect x="0.5" y="14.5" fill="#fff" class="violet-path" width="11.5" height="0.7"/>
                                    </g>
                                    <g>
                                            <rect x="13.9" y="0.6" fill="#fff" class="violet-path" width="0.7" height="12.3"/>
                                    </g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M22.6,14.9h-3h-0.1c-2.7,0-4.8,2.2-4.9,4.9v0.1v3V28h-0.9v-8.1c0-1.1,0.3-2.1,0.9-3
                                                    c0.5-0.8,1.1-1.4,1.9-1.9c0.9-0.5,1.9-0.9,3-0.9h0h0h8.1v0.9H22.6z"/>
                                            <path fill="#fff" class="violet-path" d="M15.3,28.6h-2.1v-8.8c0-1.2,0.3-2.3,0.9-3.3c0.5-0.9,1.3-1.6,2.1-2.1c1-0.6,2.2-0.9,3.3-0.9h8.8v2.1h-8.8
                                                    c-2.3,0-4.2,1.9-4.3,4.3V28.6z"/>
                                    </g>
                            </g>
                            <g>
                                    <g>
                                            <path fill="#fff" class="violet-path" d="M23.9,21.5c0.3-1,0.1-2.1-0.6-2.8c-1.1-1.1-2.8-1.1-3.8,0c-0.8,0.8-1,1.9-0.6,2.8c0.7,2,2.6,4,2.6,4
                                                    S23.1,23.6,23.9,21.5L23.9,21.5z M21.9,21.4c-0.3,0.3-0.8,0.3-1.2,0c-0.3-0.3-0.3-0.8,0-1.2c0.3-0.3,0.8-0.3,1.2,0
                                                    C22.2,20.6,22.2,21.1,21.9,21.4z"/>
                                    </g>
                            </g>
                    </g>
                    </svg>
                    </a>
                </div>
            @if (Session::get('role')=='admin')
            <div id="admin-log">
              <span>Лог админа</span>
              <div></div>
            </div>
            @endif
        </div>
    </div>
<div class="col-md-8" style="display: none">

            <div class="form-group pull-right">
                <h4>Вывод</h4>
                <textarea name="" id="textarea" cols="45" rows="20" class="form-control"></textarea>
            </div>
        </div>
        <div id="modal-how" class="modal">
        <div class="modal-wrapper">
            <div class="modal-inner">
                <span class="close">&times;</span>
                <div>
                    <span>Как это работает?</span>
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
<div id="mobile-check"></div>
<script>
    function isMobile(){
        if ($(window).width()<960) return true;
        return false;
    }
    $('.helper').on('click', function(){
        $('.helper-content.active').removeClass('active');
        $(this).find('.helper-content').addClass('active');
    });
    $('.helper-content').on('click', function(e){
        e.stopPropagation();
        $(this).removeClass('active');
    });
    var radios = $('[type="radio"]'),
          form = radios.parent(),
          length = radios.length,
          newRadios = [];
      $.each(radios, function(i){
        $(this).css({
          display: 'none'
        });
        var el = document.createElement('div');
        $(el).addClass('evth-radio');
        $(el).attr('data-value', $(this).attr('value'));
        $(el).html($(this).attr('data-label'));
        if (i===0) {
          $(el).addClass('checked');
          this.checked = true;
        }
        this.el = el;
        var elParent = this;
        $(this.el).on('click', function(){
          elParent.click();
          form.find('.checked').removeClass('checked');
          $(this).addClass('checked');
          if($(elParent).attr('value')!=='ROADS') {
              $('.cargo-params').css({
                  display: 'none'
              });
              $('.please-register').css({
                  display: 'block'
              });
              if(!isMobile()) {
                  $('.map-form-input').css('height', '368px');
              } else {
                  $('.map-form-input').css('height', '717px');
              }
          } else {
              $('.cargo-params').css({
                  display: 'block'
              });
              $('.please-register').css({
                  display: 'none'
              });
              $('.map-form-input').css('height', 'inherit');
          }
        });
      });
      for (var i = 0; i < length; i++) {
        $(radios[length-1]).after(radios[length-1-i].el)
      };
</script>
        <script>
            var uarules = {
              "Харьковская область:Запорожская область": 100
            };
            var uaAreas = {
                @foreach ($ua['areas'] as $area)
                    "{{$area->id}}":"{{$area->name}}",
                @endforeach
            }
            var uaCoeffs = {
                @foreach ($ua['coeffs'] as $coeff)
                    "{{$coeff->start_id}}:{{$coeff->end_id}}":"{{$coeff->value}}",
                @endforeach
            }
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
                };
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
              par.classList.remove('has-error');
  	          return true;
            };
            function validateCargo(){
              var m = data.cargo.m.value;
              var l = data.cargo.l.value;
              if ( m <= rules.m.max && m > rules.m.b ) { // if ( m <= 22 && m > 7)
                if ( l <= rules.l.c ) return false; //if ( l <= 3)
              } else if ( m <= rules.m.b && m > rules.m.a ) { //if ( m <= 7 && m > 2 )
                if ( l <=  rules.l.b ) return false; //if ( l <= 2 );
              };
              return true;
            }
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
                    ua: {
                        start: '',
                        end: ''
                    },
                    content: ''
                },
                directionsService: new google.maps.DirectionsService(),
                directionsDisplay: new google.maps.DirectionsRenderer({polylineOptions: {strokeColor: "#7d2879", strokeWeight: 5}}),
                autocomplete: {},
                coeffs: {
                    distance: 1,
                    load: 1,
                    country: 1,
                    uacoeff: 1
                },
                cargo: {
                    w: document.getElementById('w'),
                    l: document.getElementById('l'),
                    h: document.getElementById('h'),
                    m: document.getElementById('m'),
                    type: document.getElementById('cargotype')
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
                        if (temp<=rules.dl.a) {
                            this.coeffs.distance = rules.distance.a;
                        } else if (temp<=rules.dl.b) {
                            this.coeffs.distance = rules.distance.b;
                        } else if (temp<=rules.dl.c) {
                            this.coeffs.distance = rules.distance.c;
                        } else if (temp<=rules.dl.d) {
                            this.coeffs.distance = rules.distance.d;
                        } else if (temp<=rules.dl.e) {
                            this.coeffs.distance = rules.distance.e;
                        } else if (temp<=rules.dl.f) {
                            this.coeffs.distance = rules.distance.f;
                        } else if (temp<=rules.dl.g) {
                            this.coeffs.distance = rules.distance.g;
                        } else if (temp<=rules.dl.h) {
                            this.coeffs.distance = rules.distance.h;
                        } else {
                            this.coeffs.distance = rules.distance.i;
                        }
                    };
                    temp = this.output.countries.start + this.output.countries.end;
                    reverse_temp = this.output.countries.end + this.output.countries.start;
                    if (temp==='UAUA') {
                        var uacoeff = data.output.ua.start+':'+data.output.ua.end;
                        var reverse_uacoeff = data.output.ua.end+':'+data.output.ua.start;
                        if (uaCoeffs[uacoeff]===undefined) {
                            if (uaCoeffs[reverse_uacoeff]===undefined) {
                                data.coeffs.uacoeff = 1;
                            } else {
                                data.coeffs.uacoeff = uaCoeffs[reverse_uacoeff];
                            }
                        } else {
                            data.coeffs.uacoeff = uaCoeffs[uacoeff];
                        }
                    } else {
                      data.coeffs.uacoeff = 1;
                    }
                    if (rules.countries[temp]!==undefined) {
                        this.coeffs.country = rules.countries[temp];
                    } else if (rules.countries[reverse_temp]!==undefined) {
                        this.coeffs.country = rules.countries[reverse_temp];
                    };
                    var h = this.cargo.h.value;
                    var m = this.cargo.m.value;
                    var l = this.cargo.l.value;
                    var w = this.cargo.w.value;
                    if ( h<=rules.h.max && h>rules.h.middle) { //if ( h<=3.3 && h>2.8)
                        this.coeffs.load = rules.load.g; //log('Коэффициент - 1,2');
                    } else {
                        if ( m<=rules.m.max && m > rules.m.b ) { //if ( m<=22 && m>7 )
                            if ( l<=rules.l.max && l>rules.l.g ) { //if ( l<=16 && l>13.6 )
                                this.coeffs.load = rules.load.g; //log('Коэффициент - 1,2')
                            } else if ( l<=rules.l.g && l>rules.l.f ) { //if ( l<=13.6 && l>10 )
                                this.coeffs.load = rules.load.f; //log('Коэффициент - 1')
                            } else if ( l<=rules.l.f && l>rules.l.e ) { //if ( l<=10 && l>7 )
                                this.coeffs.load = rules.load.e;//log('Коэффициент - 0.8')
                            } else if ( l<=rules.l.e && l>rules.l.d ) {
                                this.coeffs.load = rules.load.d; //log('Коэффициент - 0.7')
                            } else if ( l<=rules.l.d && l>rules.l.e ) { // if ( l<=5 && l>3 )
                                this.coeffs.load = rules.load.c; //log('Коэффициент - 0.5')
                            } else {
                                //это исключение обрабатывает валидация
                            }
                        } else if ( m<=rules.m.b && m>rules.m.a ) { //if ( m<=7 && m>2 )
                            if ( l<=rules.l.max && l>rules.l.g ) { //if ( l<=16 && l>13.6 )
                                this.coeffs.load = rules.load.g; //log('Коэффициент - 1,2')
                            } else if ( l<=rules.l.g && l>rules.l.f ) { //if ( l<=13.6 && l>10 )
                                this.coeffs.load = rules.load.f; //log('Коэффициент - 1')
                            } else if ( l<=rules.l.f && l>rules.l.e ) { //if ( l<=10 && l>7 )
                                this.coeffs.load = rules.load.e;//log('Коэффициент - 0.8')
                            } else if ( l<=rules.l.e && l>rules.l.d ) {
                                this.coeffs.load = rules.load.d; //log('Коэффициент - 0.7')
                            } else if ( l<=rules.l.d && l>rules.l.e ) { // if ( l<=5 && l>3 )
                                this.coeffs.load = rules.load.c; //log('Коэффициент - 0.5')
                            } else if ( l<=rules.l.e && l>rules.l.b ) { //if ( l<=3 && l>2 )
                                this.coeffs.load = rules.load.b; //log('Коэффициент - 0.3')
                            } else {
                                //это исключение обрабатывает валидация
                            }
                        } else if( m<=rules.m.a ) { //if( m<=2 )
                            if ( l<=rules.l.max && l>rules.l.g ) { //if ( l<=16 && l>13.6 )
                                this.coeffs.load = rules.load.g; //log('Коэффициент - 1,2')
                            } else if ( l<=rules.l.g && l>rules.l.f ) { //if ( l<=13.6 && l>10 )
                                this.coeffs.load = rules.load.f; //log('Коэффициент - 1')
                            } else if ( l<=rules.l.f && l>rules.l.e ) { //if ( l<=10 && l>7 )
                                this.coeffs.load = rules.load.e;//log('Коэффициент - 0.8')
                            } else if ( l<=rules.l.e && l>rules.l.d ) {
                                this.coeffs.load = rules.load.d; //log('Коэффициент - 0.7')
                            } else if ( l<=rules.l.d && l>rules.l.e ) { // if ( l<=5 && l>3 )
                                this.coeffs.load = rules.load.c; //log('Коэффициент - 0.5')
                            } else if ( l<=rules.l.e && l>rules.l.b ) { //if ( l<=3 && l>2 )
                                this.coeffs.load = rules.load.b; //log('Коэффициент - 0.3')
                            } else if ( l<=rules.l.b && l>rules.l.a ) { //if ( l<=2 && l>1.2 )
                                this.coeffs.load = rules.load.a; //log('Коэффициент - 0.2')
                            } else if ( l<=rules.l.a ){ //if ( l<=1.2 )
                                this.coeffs.load = rules.load.min; //log('Коэффициент - 0.1')
                            }
                        }
                    };
                    this.price = this.coeffs.load*this.coeffs.distance*this.coeffs.country*this.output.dist*this.currency.value*this.cargo.type.value*this.coeffs.uacoeff;
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
                            'Параметры груза: длина - '+this.cargo.l.value+', ширина - '+this.cargo.w.value+', высота - '+this.cargo.h.value+', вес - '+this.cargo.m.value + '.<br>';

                    for( var i = 0; i< data.cargo.type.options.length; i++) {
                        if(this.cargo.type.value===this.cargo.type.options[i].value) this.output.content += 'Тип перевозки: ' + this.cargo.type.options[i].textContent + '<br>';
                    };
                    this.output.content += 'Цена: ' + this.price*0.001 + ' ' + this.currency.name;
                    var outs = {
                        price: document.getElementById('output-price'),
                        length: document.getElementById('output-length')
                    };
                    outs.length.innerHTML = Math.round(this.output.dist*0.001).toLocaleString() + ' км';
                    if (Math.round(this.output.dist*0.001)<=500) {
                        outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00012)+ ' до ' +Math.round(this.price*0.001+this.price*0.00012) + ' ' + this.currency.name;
                    } else if (Math.round(this.output.dist*0.001)<=1000) {
                        outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.0001)+ ' до ' +Math.round(this.price*0.001+this.price*0.0001) + ' ' + this.currency.name;
                    } else if (Math.round(this.output.dist*0.001)<=2000) {
                        outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00007)+ ' до ' +Math.round(this.price*0.001+this.price*0.00007) + ' ' + this.currency.name;
                    } else if (Math.round(this.output.dist*0.001)<=3000) {
                        outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00006)+ ' до ' +Math.round(this.price*0.001+this.price*0.00006) + ' ' + this.currency.name;
                    } else if (Math.round(this.output.dist*0.001)<=4000) {
                        outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00005)+ ' до ' +Math.round(this.price*0.001+this.price*0.00005) + ' ' + this.currency.name;
                    } else if (Math.round(this.output.dist*0.001)<=7000) {
                        outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00004)+ ' до ' +Math.round(this.price*0.001+this.price*0.00004) + ' ' + this.currency.name;
                    }else {
                        outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00003)+ ' до ' +Math.round(this.price*0.001+this.price*0.00003) + ' ' + this.currency.name;
                    }
                    if ((this.currency.name === 'UAH')&&(this.output.countries.start==="UA")&&(this.output.countries.end==="UA")) {
                        if (this.price*0.001<=1000) {
                            outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.0002)+ ' до ' +Math.round(this.price*0.001+this.price*0.0002) + ' ' + this.currency.name;
                        } else if ((this.price*0.001>1000)&&(this.price*0.001<=2500)) {
                            outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00012)+ ' до ' +Math.round(this.price*0.001+this.price*0.00012) + ' ' + this.currency.name;
                        } else if ((this.price*0.001>2500)&&(this.price*0.001<=4000)) {
                            outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.0001)+ ' до ' +Math.round(this.price*0.001+this.price*0.0001) + ' ' + this.currency.name;
                        } else if ((this.price*0.001>4000)&&(this.price*0.001<=6500)) {
                            outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00007)+ ' до ' +Math.round(this.price*0.001+this.price*0.00007) + ' ' + this.currency.name;
                        } else if ((this.price*0.001>6500)&&(this.price*0.001<=8500)) {
                            outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00004)+ ' до ' +Math.round(this.price*0.001+this.price*0.00004) + ' ' + this.currency.name;
                        } else if ((this*0.001.price>8500)&&(this.price*0.001<=12000)) {
                            outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00003)+ ' до ' +Math.round(this.price*0.001+this.price*0.00003) + ' ' + this.currency.name;
                        } else {
                            outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.00002)+ ' до ' +Math.round(this.price*0.001+this.price*0.00002) + ' ' + this.currency.name;
                        }
                    }
                    if ($('#admin-log').length>0) {
                      $('#admin-log div').html(this.output.content);
                    }
//                    outs.price.innerHTML = 'от ' + Math.round(this.price*0.001-this.price*0.0001)+ ' до ' +Math.round(this.price*0.001+this.price*0.0001) + ' ' + this.currency.name;
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
            function openHelper(){
                $(this).prev('.helper').click();
            };
            function closeHelper(){
                $(this).prev('.helper').find('.helper-content').click();
            };
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
                data.autocomplete.start = new google.maps.places.Autocomplete(data.cities.start/*,acOptions*/);
                data.autocomplete.end = new google.maps.places.Autocomplete(data.cities.end/*,acOptions*/);
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
//                        console.log(result.routes[0].legs[0].steps);

                        for (var i = 0; i < leg.length; i++) {
                            dist += leg[i].distance.value;
                        }
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
                      if (results[0].address_components[0].short_name === 'Москва') code = 'MOSCOW';
                      if(code==='UA') {
                        uacode = results[0].address_components[l-2].short_name;
                      } else {
                        uacode = undefined;
                      }
                      callback.call(this, code, uacode);
                      // console.log(results[0].address_components);
                  } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                    callback.call(this);
                  }
                });
              };
              // function codeAddressUa(city, callback) {
              //     geocoder.geocode( { 'address': city.value}, function(results, status) {
              //       if (status == google.maps.GeocoderStatus.OK) {
              //           var l = results[0].address_components.length;
              //           var code = results[0].address_components[l-2].short_name;
              //           callback.call(this, code);
              //           // console.log(code);
              //       } else {
              //         alert('Невозможно определить область: ' + status);
              //         callback.call(this);
              //       }
              //     });
              //   };
              function ajaxOrder() {
                  var xhr, body, box, ajax_inputs;
                  if (email_inp.value!=='') data.output.content = 'Email отправителя: <strong>' + email_inp.value +'</strong><br>' + data.output.content;
                  ajax_inputs = document.getElementById('ajax-inputs');
                  box = document.querySelector('.orange-block');
                  xhr = new XMLHttpRequest();
                  xhr.open('POST', '/order', true);
                  xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                  body = 'phone=' + phone_inp.value + '&content='+ data.output.content;
                  xhr.send(body);
                  xhr.onreadystatechange = function (){
                      if (xhr.readyState != 4) return;
                      var output = document.createElement('div');
                      output.setAttribute('id', 'ajax-output');
                      if (xhr.responseText==='saved') {
                          output.innerHTML = '<span>Заявка принята! Наши менеджеры свяжутся с вами в ближайшее время!</span><div class="success-order"><i class="fa fa-check-square-o"></i></div>';
                      } else {
                          output.innerHTML = '<span>Что-то пошло не так... Просто позвоните нам по телефону на главной странице!</span>'
                      }
                      box.appendChild(output);
                  };
                  ajax_inputs.style.display = 'none';
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
                temp = new google.maps.places.Autocomplete(inp,{});
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
                $('.map-forms-wrapper').attr('data-height',$('.map-forms-wrapper').height()+'px');
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
                    openHelper.call(this);
                });
                inputs[i].addEventListener('blur',function(){
                    validate.call(this);
                    closeHelper.call(this);
                });
            };

            rend.addEventListener('click', function(){
                var arr = [];
                for (var i = 0; i< inputs.length; i++) {
                    if(!(validate.call(inputs[i]))) arr.push(false);
                };
                if (arr.length>0) return false;
                if (!validateCargo()) {
                  console.log('Слишком маленькая длина для такого тяжелого груза');
                  if($('#admin-log').length>0) $('#admin-log div').html('Слишком маленькая длина для такого тяжелого груза')
                  return false;
                }
                codeAddress(data.cities.start, function(code, uacode){
                    data.output.countries.start = code;
                    for (key in uaAreas) {
                        if (uaAreas[key] === uacode) data.output.ua.start = key;
                    }
                });
                codeAddress(data.cities.end, function(code, uacode){
                    data.output.countries.end = code;
                    for (key in uaAreas) {
                        if (uaAreas[key] === uacode) data.output.ua.end = key;
                    }
                });
                calcRoute(function(dist){
                    data.output.dist = dist;
                    data.showAll();
                });
                $('.map-form-input').fadeOut(200, function(){
                    $('.map-form-output').fadeIn();
                });
                $(window).scrollTop(0);
            });

            var phone_but, phone_inp, email_inp;
            phone_but = document.getElementById('phone_but');
            phone_inp = document.getElementById('phone_inp');
            email_inp = document.getElementById('email_inp');
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
                    $('#ajax-output').remove();
                    $('#ajax-inputs').css('display', 'block');
                });
            });
            $('.show-form').on('click', function(){
                var i = $(this).find('i');
                if (i.hasClass('fa-eye-slash')) {
                    i.removeClass('fa-eye-slash');
                    i.addClass('fa-eye');
                    $('.map-forms-wrapper').attr('data-height',$('.map-forms-wrapper').height()+'px');
                    $('.map-forms-wrapper').css('height', '80px');
                } else {
                    i.removeClass('fa-eye');
                    i.addClass('fa-eye-slash');
                    $('.map-forms-wrapper').css('height',  $('.map-forms-wrapper').attr('data-height'));
                }
            });
        </script>
<script src="evth/public/js/ready.js"></script>
<script src="evth/public/js/dragonmap.js"></script>
include('counters.metrika')
    </body>
</html>
