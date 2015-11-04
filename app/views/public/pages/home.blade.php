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
    <link rel="apple-touch-icon-precomposed" href="evth/public/img/fav-01.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="evth/public/img/fav-02.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="evth/public/img/fav-03.jpg">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="evth/public/img/fav-04.jpg">
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
                    <svg version="1.1" class="logo-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 147 29" enable-background="new 0 0 147 29" xml:space="preserve">
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
<div id="mobile-check"></div>
<script src="evth/public/js/ready.js"></script>
<!--<script src="evth/public/js/enter.js"></script>-->
<script src="evth/public/js/home.js"></script>
@include('counters.metrika')
</body>
</html>