<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Rate&GO!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="evth/public/css/style.css">
    <link rel="stylesheet" href="evth/public/css/owl.carousel.css">
    <link rel="stylesheet" href="evth/public/css/owl.theme.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>    
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
    <script src="evth/public/js/owl.carousel.min.js"></script>
</head>
<body>
<div class="overlay">
    <div class="wrapper top">
        <video poster="evth/public/img/video-preloader.png" class="background-video" id="video" autoplay="autoplay" loop="loop" muted>
            <source src="evth/public/video/screen.mp4" type='video/mp4'>
             <source src="evth/public/video/screen.webm" type='video/webm;'>
        </video>
        <div class="inner">             
            <header>
                <div class="language">
                    <select name="language" id="language">
                        <option value="ru">RU</option>
                        <option value="en">EN</option>                    
                    </select>
                </div>                
                <div class="logo">
                    <img src="evth/public/img/logo.png">
                </div>
                <!--Composer view for unsigned users-->
                @include('composers.sign')             
                <!--End of composer view for unsigned users-->
            </header>
            <h1 class="top-title">Узнайте оптимальную стоимость транспортировки Вашего груза<br>в любую точку мира за 30 секунд</h1>
        </div>  
        <div class="wrapper violet-bg">
            <div class="inner">
                <div class="top-form">
                    <form action="/map" method="GET">
                    <h2 class="top-form-title">Выберете город</h2>
                    <div class="top-form-inputs">
                        <div class="from"><i class="fa fa-map-marker violet-c"></i><input name="start" type="text" placeholder="откуда"></div>
                        <div class="arrows"><i class="evth-arrows"></i></div>
                        <div class="where"><i class="fa fa-map-marker violet-c"></i><input name="end" type="text" placeholder="куда"></div>
                    </div>
                    <div class="top-form-buttons">
                        <button type="submit" class="button">Поехали</button>
                    </form>
                        <span class="link modal-toggle" data-modal="modal-how">Как это работает?</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <div class="wrapper">
        <div class="inner section">
            <h2 class="title">посмотрите видео о нас</h2>
            <div class="designer-decision">
                <div class="col-2">
                    <iframe src="http://player.vimeo.com/video/69793626" width="420px" height="186px" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
                <div class="col-2">
                    <p><span class="orange-c">Rate&Go</span> - это безопасная и надежная площадка, на которой можно за 30 секунд рассчитать стоимости перевозки грузов от 100 кг до 100+ тонн и перевести груз вместе с нашей командой оформив заказ через личный кабинет на сайте.</p>
                    <p><span class="orange-c">Rate&Go</span> - самый легкий путь быстро узнать лучшую цену и качественно перевезти Ваш груз.</p>
                </div>
            </div>
        </div>
    </div>-->
    <div class="wrapper grey-bg">
        <div class="inner section">
            <h2 class="title">кто с нами работает</h2>
            <div class="center">
                <img src="evth/public/img/partners.png" class="partners" alt="кто с нами работает">
                <img src="evth/public/img/partners-mobile.png" class="partners-mobile" alt="кто с нами работает">
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="inner section">
            <h2 class="title">Этапы работы</h2>
            <div class="steps">
                <div id="tabs" class="tabs">
                    <div class="tabs-nav">
			<ul>
                            <li><span class="tab-nav-digit">1</span><span class="tab-nav-descr">Расчет стоимости</span></li>
                            <li><span class="tab-nav-digit">2</span><span class="tab-nav-descr">Оформление заказа</span></li>
                            <li><span class="tab-nav-digit">3</span><span class="tab-nav-descr">Предоплата</span></li>
                            <li><span class="tab-nav-digit">4</span><span class="tab-nav-descr">Доставка</span></li>
                            <li><span class="tab-nav-digit">5</span><span class="tab-nav-descr">Довольный клиент</span></li>                            
			</ul>
                    </div>
                    <div class="tabs-content">
			<ul>
                            <li>
                                <div class="tab-content-wrapper">
                                    <div class="tab-content-text">
                                        <h3>РАСЧЕТ СТОИМОСТИ</h3>
                                        <p>С помощью программного калькулятора Rate&Go, Вы получаете расчет стоимости перевозки. Это сделать очень просто и быстро.<br>
Предложенная цена соответствует реальному положению рынка грузоперевозок и валидна на момент подписания с нами заявки в течении 14 суток. По истечению этого времени, цена может измениться в меньшую или в большую сторону, в зависимости от ситуации на рынке.<br>
Чтобы зафиксировать цену, Вам нужно оформить заказ через наш сайт. </p>
                                    </div>
                                    <div class="img">
                                        <img src="evth/public/img/tab-img-1.png" alt="Расчет стоимости">                                        
                                    </div>                                    
                                </div>
                            </li>
                            <li>
                                <div class="tab-content-wrapper">
                                    <div class="tab-content-text">
                                        <h3>Оформление заказа</h3>
                                        <p>Оформление заказа это просто.<br>
Отправьте результаты, которые Вы получили через калькулятор Rate&Go, это можно сделать в один клик, нажав кнопку «Отправить», которая появится на экране после расчета цены. Вы также можете позвонить нам по телефону и компетентный менеджер все сделает за Вас.<br>
Подпись Контракта и Заявки на перевозку займет тоже немного времени и сил. Наш типовой Контракт и Заявку Вы можете получить на e-mail.</p>
                                    </div>
                                    <div class="img">
                                        <img src="evth/public/img/tab-img-2.jpg" alt="Расчет стоимости">                                        
                                    </div>                                    
                                </div>
                            </li>
                            <li>
                                <div class="tab-content-wrapper">
                                    <div class="tab-content-text">
                                        <h3>Предоплата</h3>
                                        <p>Для подтверждения Заказа понадобиться сделать предоплату в размере 50% от суммы фрахта после таможенного оформления груза (импорт/экспорт)<br>
Предоплата производиться на счет Компании Rate&Go в любой валюте мира согласно выставленного счета.<br>
Конечная оплата производиться по факту доставки груза в гибкие сроки.</p>
                                    </div>
                                    <div class="img">
                                        <img src="evth/public/img/tab-img-3.jpg" alt="Расчет стоимости">                                        
                                    </div>                                    
                                </div>
                            </li>
                            <li>
                                <div class="tab-content-wrapper">
                                    <div class="tab-content-text">
                                        <h3>Доставка</h3>
                                        <p>Rate&Go гарантирует качественный сервис по доставке любых грузов по всему миру. Мы берем на себя обязательства доставить Ваш груз точно в срок. На каждую перевозку предоставляется страховой сертификат от наших партнеров-страховых компаний с высоким мировым рейтингом.<br>
Доставка грузов выполняется в соответствии с Международной конвенцией и отвечает всем мировым стандартам и требованиям.</p>
                                    </div>
                                    <div class="img">
                                        <img src="evth/public/img/tab-img-4.jpg" alt="Расчет стоимости">                                        
                                    </div>                                    
                                </div>
                            </li>
                            <li>
                                <div class="tab-content-wrapper">
                                    <div class="tab-content-text">
                                        <h3>Довольный клиент</h3>
                                        <p>Мы делаем все возможное, чтобы предложить нашим клиентам максимально удобный сервис по перевозкам грузов.<br>
Для нас важен результат нашей работы и поэтому мы делаем нашу работу с ювелирной точностью. Мы ценим доверие наших клиентов, партнеров и знаем, что наши клиенты всегда могут рекомендовать нас только с лучшей стороны.</p>
                                    </div>
                                    <div class="img">
                                        <img src="evth/public/img/tab-img-5.jpg" alt="Расчет стоимости">                                        
                                    </div>                                    
                                </div>
                            </li>
			</ul>
                    </div>
                </div>
                <div class="steps-owl" id="steps-owl">
                    <div class="step-item">
                        <div class="step-img-wrapper">
                            <img src="evth/public/img/tab-img-1.png" class="step-img" alt="">
                        </div>
                        <div class="step-title">Расчет стоимости</div>
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>РАСЧЕТ СТОИМОСТИ</h3>
                            <p>С помощью программного калькулятора Rate&Go, Вы получаете расчет стоимости перевозки. Это сделать очень просто и быстро.<br>
Предложенная цена соответствует реальному положению рынка грузоперевозок и валидна на момент подписания с нами заявки в течении 14 суток. По истечению этого времени, цена может измениться в меньшую или в большую сторону, в зависимости от ситуации на рынке.<br>
Чтобы зафиксировать цену, Вам нужно оформить заказ через наш сайт. </p>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-img-wrapper">
                            <img src="evth/public/img/tab-img-2.jpg" class="step-img" alt="">
                        </div>
                        <div class="step-title">Оформление заказа</div>
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Оформление заказа</h3>
                            <p>Оформление заказа это просто.<br>
Отправьте результаты, которые Вы получили через калькулятор Rate&amp;Go, это можно сделать в один клик, нажав кнопку «Отправить», которая появится на экране после расчета цены. Вы также можете позвонить нам по телефону и компетентный менеджер все сделает за Вас.<br>
Подпись Контракта и Заявки на перевозку займет тоже немного времени и сил. Наш типовой Контракт и Заявку Вы можете получить на e-mail.</p>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-img-wrapper">
                            <img src="evth/public/img/tab-img-3.jpg" class="step-img" alt="">
                        </div>
                        <div class="step-title">Предоплата</div>
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Предоплата</h3>
                            <p>Для подтверждения Заказа понадобиться сделать предоплату в размере 50% от суммы фрахта после таможенного оформления груза (импорт/экспорт)<br>
Предоплата производиться на счет Компании Rate&amp;Go в любой валюте мира согласно выставленного счета.<br>
Конечная оплата производиться по факту доставки груза в гибкие сроки.</p>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-img-wrapper">
                            <img src="evth/public/img/tab-img-4.jpg" class="step-img" alt="">
                        </div>
                        <div class="step-title">Доставка</div>
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>ДОСТАВКА</h3>
                            <p>Rate&amp;Go гарантирует качественный сервис по доставке любых грузов по всему миру. Мы берем на себя обязательства доставить Ваш груз точно в срок. На каждую перевозку предоставляется страховой сертификат от наших партнеров-страховых компаний с высоким мировым рейтингом.<br>
Доставка грузов выполняется в соответствии с Международной конвенцией и отвечает всем мировым стандартам и требованиям.</p>
                        </div>
                    </div>
                    <div class="step-item">
                        <div class="step-img-wrapper">
                            <img src="evth/public/img/tab-img-5.jpg" class="step-img" alt="">
                        </div>
                        <div class="step-title">Довольный клиент</div>
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Довольный клиент</h3>
                            <p>Мы делаем все возможное, чтобы предложить нашим клиентам максимально удобный сервис по перевозкам грузов.<br>
Для нас важен результат нашей работы и поэтому мы делаем нашу работу с ювелирной точностью. Мы ценим доверие наших клиентов, партнеров и знаем, что наши клиенты всегда могут рекомендовать нас только с лучшей стороны.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrapper grey-bg violet-map">
        <div class="inner">
            <h2 class="title">Где мы работаем</h2>
            <div class="works-list">
                <ul>
                    <li>МЫ ПЕРЕВОЗИМ<br>155,000 тонн ежегодно</li>
                    <li>РАБОТАЕМ В<br>190 странах</li>
                    <li>постоянных<br>КЛИЕНТОВ<br>более 120</li>
                    <li>ОХВАТЫВАЕМ<br>более 34000 городов</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="wrapper">
        <div class="inner">
            <h2 class="title">Услуги</h2>
            <div class="clearfix">
                <div class="col-3">
                    <div class="service">
                        <div class="service-icon">
                            <span class="icon-car"></span>
                        </div>                    
                        <div class="service-description">
                            <h3>Автомобильные международные перевозки</h3>
                            <p>Перевозки импортных, экспортных и транзитных грузов. Все страны СНГ, ср. Азии, внутри Евросоюза.</p>
                        </div>                    
                    </div>
                </div>
                <div class="col-3">
                    <div class="service">
                        <div class="service-icon">
                            <span class="icon-ship"></span>
                        </div>                    
                        <div class="service-description">
                            <h3>Морские контейнерные перевозки</h3>
                            <p>Морские контейнерные перевозки и экспедирование грузов по всему миру. Оформление всей морской документации.</p>
                        </div>                    
                    </div>
                </div>             
                <div class="col-3">
                    <div class="service">
                        <div class="service-icon">
                            <span class="icon-boxes"></span>
                        </div>                    
                        <div class="service-description">
                            <h3>Перевозка<br>сборных<br>грузов</h3>
                            <p>Группажные перевозки весом от 100 кг с консолидацией на любом из наших лицензионных складов в Европе, СНГ.</p>
                        </div>                    
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="service">
                    <div class="service-icon">
                        <span class="icon-money-bag"></span>
                    </div>                    
                    <div class="service-description">
                        <h3>Брокерские услуги</h3>
                        <p>Таможенное оформление экспортных, импортных и транзитных грузов. Прохождение сертификации товара и получение необходимых разрешений.</p>
                    </div>                    
                </div>
            </div>
            <div class="col-4">
                <div class="service">
                    <div class="service-icon">
                        <span class="icon-umbrella"></span>
                    </div>                    
                    <div class="service-description">
                        <h3>Страхование</h3>
                        <p>Страхование груза от повреждений и форс-мажорных обстоятельств при транспортировке. Ответственность перевозчика за аварию.</p>
                    </div>                    
                </div>
            </div>
            <div class="col-4">
                <div class="service">
                    <div class="service-icon">
                        <span class="icon-rulers"></span>
                    </div>                    
                    <div class="service-description">
                        <h3>Негабаритные перевозки</h3>
                        <p>Перевозка автопарком негабаритных, крупногабаритных, длинномерных и тяжеловесных грузов.</p>
                    </div>                    
                </div>
            </div>
            <div class="col-4">
                <div class="service">
                    <div class="service-icon">
                        <span class="icon-storehouse"></span>
                    </div>                    
                    <div class="service-description">
                        <h3>Хранение</h3>
                        <p>Хранение в складском помещении с гарантией сохранности Вашего груза. Возможность оставить груз как на временное хранение, так и на длительный период.</p>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <footer class="wrapper">
        <img src="evth/public/img/contacts-bg-new.png">
        <div class="inner">
            <div class="contacts">
                <h2>Контакты</h2>
                <p>Главный офис:<br>ул. Верхний Вал 4А Киев 04071 Украина</p>
                <p>+380-44-492-4020 - Ukraine</p>
                <p>+7 (495) 133-8777 - RUS</p>
                <p>+420-234-261-739 - Czech Republic</p> 
                <p><a href="mailto:info@rate-and-go.com">info@rate-and-go.com</a></p>
                <div class="copyright"><a href="http://imsmedia.net.ua/" target="_blank">IMS MEDIA 2015</a></div>
            </div>
        </div>
    </footer>
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
<!--    <div id="modal-enter" class="modal">
                    <div class="modal-wrapper">
                        <div class="modal-inner">
                            <span class="close">&times;</span>
                            <div>
                                <h2>Войти на сайт</h2>
                                <div class="input-wrapper">
                                    <i class="fa fa-user pre-input"></i><input name="email" id="sing-in-email" type="text" placeholder="Email">
                                </div>
                                <div class="input-wrapper">
                                    <i class="fa fa-key pre-input"></i><input type="password" name="password" id="sing-in-password" placeholder="Пароль">
                                </div>
                                <div class="input-wrapper evth-right-text"><a href="{{action('RemindersController@getRemind')}}">Забыли пароль?</a>&nbsp;<button type="submit" id="sing-in-submit" class="evth-btn violet-c"><i class="fa fa-arrow-circle-right"></i> Войти</button></div>
                            </div>
                        </div>
                    </div>
                </div>-->
</div>
<script src="evth/public/js/ready.js"></script>
<!--<script src="evth/public/js/enter.js"></script>-->
<script src="evth/public/js/home.js"></script>
@include('counters.metrika')
</body>
</html>