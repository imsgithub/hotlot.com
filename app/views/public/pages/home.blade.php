<!doctype html>
<html lang="ru">

<head>

  <meta charset="UTF-8">
  {{App::setLocale(Session::get('lang'))}}
  <title>{{Lang::get('mainpage.title')}}</title>
  <meta name="description" content="Международные перевозки по всему миру - рассчитай онлайн стоимость грузоперевозки">
  <meta name="keywords" content="международные перевозки, грузоперевозки, доставка, расчет стоимость перевозки ">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

  <link rel="stylesheet" href="evth/public/css/style.css">
  <link rel="stylesheet" href="evth/public/css/owl.carousel.css">
  <link rel="stylesheet" href="evth/public/css/owl.theme.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">

  <!-- новое -->
  <link href="/evth/public/css/pagestyle.css" rel="stylesheet">

  <link rel="apple-touch-icon-precomposed" href="evth/public/img/fav-01.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="evth/public/img/fav-02.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="evth/public/img/fav-03.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="evth/public/img/fav-04.jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
  <script src="evth/public/js/owl.carousel.min.js"></script>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ru_RU/sdk.js#xfbml=1&version=v2.5";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</head>

<body id="home">
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5RWGWK"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5RWGWK');</script>
<!-- End Google Tag Manager -->
{{App::setLocale(Session::get('lang'))}}
  <div class="overlay">
    <div class="wrapper top">



      <video poster="evth/public/img/video-preloader.png" class="background-video" id="video" autoplay="autoplay" loop="loop" muted>
        <source src="evth/public/video/screen.mp4" type='video/mp4'>
        <source src="evth/public/video/screen.webm" type='video/webm;'>
      </video>
      <div class="header-wrapper top">
        <div class="inner-nav">
          <a href="/" class="header__logo">
            <svg version="1.1" width="138" height="27" id="logo_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 245.4 47.4" enable-background="new 0 0 245.4 47.4" xml:space="preserve">
                        <g>
                          <g>
                            <path fill="#ffffff" d="M62.7,9.1c8.2,0,12.2,5.3,12.2,11.1c0,5.4-3.5,10.1-9.5,10.6l12.2,14.4l-3.5,1.8L58.9,28.5h-0.2v17.6L55,46.5V9.1H62.7z M58.6,28h4.5c4.5,0,7.8-3.5,7.8-7.9c0-4-2.9-7.7-8-7.7h-4.3V28z" />
                          </g>
                          <g>
                            <path fill="#ffffff" d="M82.4,19.8c1.8-0.6,4.5-1.5,7.4-1.5c9.5,0,9.7,7.1,9.7,8.5v19.2l-3.1,0.6v-3.9h-0.2c-1.8,2.9-5,3.9-7.8,3.9c-5.3,0-10-3.7-10-9.8c0-6.4,5.1-9.7,10-9.7c2.5,0,5.6,0.9,7.7,3.4h0.1v-4.1c0-3.1-2.6-5.2-6.5-5.2c-2.5,0-5.1,0.9-7.1,1.7l-1.6,0.6L82.4,19.8z M81.9,36.7c0,3.3,2.2,7,7.1,7c4.7,0,7.4-3.2,7.4-6.6c0-3.3-2.5-6.8-7.7-6.8C84.3,30.2,81.9,33.4,81.9,36.7z"
                            />
                          </g>
                          <g>
                            <path fill="#ffffff" d="M106.3,12.3l3.3-1.7V19h7.3v3h-7.3v16.8c0,1.9,0.2,4.9,4.9,4.9c0.8,0,1.4-0.1,2.5-0.6v3.1c-0.9,0.3-2.2,0.5-3.3,0.5c-4,0-7.4-2.1-7.4-7.7V22h-3.6l0.8-3h2.9V12.3z" />
                          </g>
                          <g>
                            <path fill="#ffffff" d="M143.6,42.8c-2.7,2.3-6.2,3.9-10.5,3.9c-9.7,0-14.2-7.9-14.2-14.2c0-7.9,5.9-14.1,14-14.1c4.2,0,8.7,1.8,11.5,6.4l-20.9,12.5c1.8,4,5.8,6.2,9.5,6.2c3.9,0,7.9-2.2,10.6-4.9V42.8z M139.6,24c-1.5-1.5-3.7-2.7-6.8-2.7c-4.9,0-10.6,3.6-10.6,10.7c0,0.8,0.1,1.5,0.3,2.3L139.6,24z"
                            />
                          </g>
                          <g>
                            <path fill="#ffffff" d="M168.2,34.3l6.4-6.5l2.5,2.4l-6.8,6.9l6.6,7.7l-3,2l-6-7.3l-1.9,1.9c-2.8,2.8-5.1,5.3-9.2,5.3c-5.3,0-9.4-3.9-9.4-9.3c0-5.2,3.4-7.6,5.9-10l2.6-2.5c-3.2-3.9-3.6-7-3.6-8.5c0-5,3.5-8.3,8.3-8.3c4.6,0,7.5,3.6,7.5,6.9c0,3.8-3,6.3-5.6,8.7l-1.8,1.7L168.2,34.3z M158,27.5l-2.3,2.2c-1.9,1.8-4.8,4.2-4.8,7.9c0,3.7,3.3,5.6,5.8,5.6c3,0,5.3-2.9,7-4.4l2-1.9L158,27.5z M159.2,22.3c2.1-1.6,5.2-4.4,5.2-7.6c0-2.6-2.6-3.6-4.2-3.6c-2.4,0-4.4,1.8-4.4,5.2c0,2.1,1,4.5,2.7,6.5L159.2,22.3z"
                            />
                          </g>
                          <g>
                            <path fill="#ffffff" d="M210.3,16c-2.3-2.1-5.9-4.3-10.9-4.3c-8.1,0-15.4,6.5-15.4,16.2c0,7.7,5.8,15.6,15.8,15.6c3.4,0,6.6-0.9,9.9-3.4V29.6h-12.4l1.2-3.5h15v15.7c-5.4,4.5-10.6,5.1-13.8,5.1c-12.9,0-19.6-10-19.6-19c0-9.7,7-19.7,19.5-19.7c3.8,0,8.5,0.9,12.9,4.9L210.3,16z"
                            />
                          </g>
                          <g>
                            <path fill="#ffffff" d="M231.3,18.3c7.8,0,14.1,6.3,14.1,14.2c0,7.8-6.3,14.2-14.1,14.2s-14.1-6.4-14.1-14.2C217.1,24.6,223.5,18.3,231.3,18.3z M231.3,43.7c6,0,10.7-5.1,10.7-11.2c0-6.1-4.8-11.2-10.7-11.2c-5.9,0-10.7,5-10.7,11.2C220.5,38.6,225.4,43.7,231.3,43.7z"
                            />
                          </g>
                        </g>
              <path fill="#ffffff" d="M43.9,0H24.3v20.9h-1.2V0H3.5C1.6,0,0,1.6,0,3.5v20.2h20.1v1.1H0v19.2c0,1.9,1.6,3.5,3.5,3.5H22V32.6c0-2,0.5-3.9,1.6-5.6c0.9-1.4,2.1-2.6,3.5-3.5c1.7-1,3.6-1.6,5.6-1.6h14.8V3.5C47.4,1.6,45.9,0,43.9,0z M17.6,15.2l-1.9,1.9l-3.3-3.3l-3.3,3.3l-1.9-1.9l3.3-3.3L7.2,8.6l1.9-1.9l3.3,3.3l3.3-3.3l1.9,1.9l-3.3,3.3L17.6,15.2z M18.4,36.2h-4.7v4.7h-2.7v-4.7H6.4v-2.7h4.7v-4.7h2.7v4.7h4.7V36.2z M33.3,5.9H36v2.7h-2.7V5.9z M36,17.9h-2.7v-2.7H36V17.9z M40.7,13.2H28.6v-2.7h12.1V13.2z"
              />
              <g>
                <path fill="#ffffff" d="M34.5,33.3c-0.5,0.5-0.5,1.4,0,1.9c0.5,0.5,1.4,0.5,1.9,0c0.5-0.5,0.5-1.4,0-1.9C35.9,32.7,35,32.7,34.5,33.3z" />
                <path fill="#ffffff" d="M32.5,25.4c-3.9,0-7,3.2-7.1,7.1v14.9h18.5c1.9,0,3.5-1.6,3.5-3.5V25.4H32.5z M39.7,35.4L39.7,35.4c-1.2,3.4-4.3,6.6-4.3,6.6s-3.1-3.2-4.3-6.6c-0.5-1.6-0.2-3.4,1.1-4.7c1.8-1.8,4.6-1.8,6.4,0C39.9,32,40.3,33.8,39.7,35.4z" />
              </g>
                      </svg>
          </a>
          <nav class="main-nav" role="navigation">
            <a href="/" role="button">{{ Lang::get('mainpage.main_menu') }}</a>
            <a href="/#services" role="button">{{ Lang::get('mainpage.services_menu') }}</a>
            <a href="/pages" role="button">{{ Lang::get('mainpage.pages_menu') }}</a>
            <a href="/#how_we_work" role="button">{{ Lang::get('mainpage.how_we_work_menu') }}</a>
            <a href="/#contacts" role="button">{{ Lang::get('mainpage.contacts_menu') }}</a>
            <a href="/profile" class="mobile-nav-link"><i class="fa fa-sign-in"></i> {{Lang::get('mainpage.go_in_private')}}</a>
          </nav>
          <!--div class="language">
            <select name="language" id="language">
              <option value="ru">RU</option>
              <option value="en">EN</option>
            </select>
          </div-->
          <div class="main-menu-button" id="main-menu-button"></div>
          <div class="login-button">
            @if(($role=='admin')||($role=='miniadmin'))
				<a href="/admin" class="sing-in-link"><i class="fa fa-sign-in"></i> {{Lang::get('mainpage.go_in_private')}}</a>
			@elseif($role=='member')
				<a href="/profile" class="sing-in-link"><i class="fa fa-sign-in"></i> {{Lang::get('mainpage.go_in_private')}}</a>
            @else
				<a href="/login" class="sing-in-link"><i class="fa fa-sign-in"></i> {{Lang::get('mainpage.go_in_private')}}</a>
            @endif

            <div>
              <a href="/login"><i class="fa fa-sign-in"></i>Войти</a>
              <a href="/sign-up"><i class="fa fa-user-plus"></i>Зарегистрироваться</a>
            </div>
          </div>


        </div>
      </div>


      <div class="inner">


          <!--Composer view for unsigned users-->

          <!--End of composer view for unsigned users-->


        <span class="top-title">{{Lang::get('mainpage.coast1')}}</span>
        <span class="top-subtitle">{{Lang::get('mainpage.belay')}}<br>
        <!--<a href="/changelanguage/en">En</a>
            <a href="/changelanguage/ru">Ru</a></span>-->
      </div>

      <div class="wrapper violet-bg">
        <div class="inner">
          <div class="top-form">
            <form action="/map" method="GET" id="abform">
              <span class="top-form-title">{{Lang::get('mainpage.route')}}</span>
              <div class="top-form-inputs">
                <div class="from"><i class="fa fa-map-marker violet-c"></i>
                  <input name="start" type="text" placeholder="{{Lang::get('mainpage.from_whence')}}">
                </div>
                <div class="arrows"><i class="evth-arrows"></i></div>
                <div class="where"><i class="fa fa-map-marker violet-c"></i>
                  <input name="end" type="text" placeholder="{{Lang::get('mainpage.where')}}">
                </div>
                <!--div class="abphone"><i class="fa fa-phone violet-c"></i>
                  <input name="phone" type="text" placeholder="{{Lang::get('mainpage.your_phone')}}">
                </div-->
              </div>
              <div class="top-form-buttons">
                <button type="submit" class="button" onclick="ga('send', 'event', 'Кнопка рассчитать', 'click', 'Экран№1');">{{Lang::get('mainpage.calculate')}}</button>
            </form>
            <span class="link modal-toggle" data-modal="modal-how">{{Lang::get('mainpage.how_it_works')}}</span>
            </div>
          </div>
        </div>
      </div>
      <div class="scroll-arrow"><i class="fa fa-angle-down"></i></div>
    </div>
<div name="services" id="services" class="wrapper grey-bg">
  <span  class="title">{{Lang::get('mainpage.services')}}</span>
  <div class="inner-extended">
    <div id="serviceTarget"></div>
    <div class="service-row">

      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <span class="icon-car"></span>
          </div>
          <div class="service-description">
            <a href="/pages/auto-perevozki"><span class="service-description-title">{{Lang::get('mainpage.Automobile_int_trans_title')}}</span></a>
            <div class="display">
              
            </div>
          </div>
        </div>
      </div>

      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <span class="icon-ship"></span>
          </div>
          <div class="service-description">
            <a href="/pages/morskie-perevozki"><span class="service-description-title">{{Lang::get('mainpage.container_shipping_title')}}</span></a>
            <div class="display">
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <span class="icon-boxes"></span>
          </div>
          <div class="service-description">
            <a href="/pages/perevozka-sbornih-gruzov"><span class="service-description-title">{{Lang::get('mainpage.groupage_cargo_title')}}</span></a>
            <div class="display">
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <span class="icon-cross"></span>
          </div>
          <div class="service-description">
            <a href="/pages/multimodalnie-perevozki"><span class="service-description-title">{{Lang::get('mainpage.multimodal_transportation_title')}}</span></a>
            <div class="display">
              
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="service-row">
      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <span class="icon-money-bag"></span>
          </div>
          <div class="service-description">
            <a href="/pages/brokerskie-uslugi"><span class="service-description-title">{{Lang::get('mainpage.brokerage_services_title')}}</span></a>
            <div class="display">
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <span class="icon-umbrella"></span>
          </div>
          <div class="service-description">
            <a href="/pages/insurance"><span class="service-description-title">{{Lang::get('mainpage.insurance_title')}}</span></a>
            <div class="display">
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <span class="icon-rulers"></span>
          </div>
          <div class="service-description">
            <a href="/pages/negabaritnie-gruzoperevozki"><span class="service-description-title">{{Lang::get('mainpage.oversized_transport_title')}}</span></a>
            <div class="display">
              
            </div>
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="service">
          <div class="service-icon">
            <span class="icon-storehouse"></span>
          </div>
          <div class="service-description">
            <a href="/pages/storage"><span class="service-description-title">{{Lang::get('mainpage.storage_title')}}</span></a>
            <div class="display"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="wrapper">
      <div class="inner section">
        <span class="title">{{Lang::get('mainpage.world_delivery')}}</span>
        <div class="designer-decision">
          <div class="about-us__left">
            <iframe src="https://www.youtube.com/embed/eyx6hLcof5c?showinfo=0" width="100%" height="303" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
          <div class="about-us__right">
            <p>
              <span class="orange-c">Rate&Go</span> - {{Lang::get('mainpage.ww_content')}}</p>
            <p>
              <span class="orange-c">Rate&Go</span> - {{Lang::get('mainpage.ww_content2')}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper grey-bg">
      <div class="inner section">
        <span class="title">{{Lang::get('mainpage.trust')}}</span>
        <div class="center">
          <img src="evth/public/img/partners.png" class="partners" alt="кто с нами работает">
          <img src="evth/public/img/partners-mobile.png" class="partners-mobile" alt="кто с нами работает">
        </div>
      </div>
    </div>
    <div class="wrapper" id="how_we_work">
      <div class="inner section">
        <span class="title">{{Lang::get('mainpage.how_we_work')}}</span>
        <div class="steps">
          <div id="tabs" class="tabs">
            <div class="tabs-nav">
              <ul>
                <li>
                  <span class="tab-nav-digit">1</span>
                  <span class="tab-nav-descr">{{Lang::get('mainpage.price_calc')}}</span>
                </li>
                <li>
                  <span class="tab-nav-digit">2</span>
                  <span class="tab-nav-descr">{{Lang::get('mainpage.checkout')}}</span>
                </li>
                <li>
                  <span class="tab-nav-digit">3</span>
                  <span class="tab-nav-descr">{{Lang::get('mainpage.delivery')}}</span>
                </li>
                <li>
                  <span class="tab-nav-digit">4</span>
                  <span class="tab-nav-descr">{{Lang::get('mainpage.payment')}}</span>
                </li>
                <li>
                  <span class="tab-nav-digit">5</span>
                  <span class="tab-nav-descr">{{Lang::get('mainpage.happy_client')}}</span>
                </li>
              </ul>
            </div>
            <div class="tabs-content">
              <ul>
                <li>
                  <div class="tab-content-wrapper">
                    <div class="tab-content-text">
                      <span class="tab-comtent-text-title">{{Lang::get('mainpage.price_calc')}}</span>
                      <p>{{Lang::get('mainpage.price_calc_content')}}</p>
                    </div>
                    <div class="img">
                      <img src="evth/public/img/tab-img-1.png" alt="Расчет стоимости">
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tab-content-wrapper">
                    <div class="tab-content-text">
                      <span class="tab-comtent-text-title">{{Lang::get('mainpage.checkout')}}</span>
                      <p>{{Lang::get('mainpage.checkout_content')}}</p>
                    </div>
                    <div class="img">
                      <img src="evth/public/img/tab-img-2.jpg" alt="Расчет стоимости">
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tab-content-wrapper">
                    <div class="tab-content-text">
                      <span class="tab-comtent-text-title">{{Lang::get('mainpage.delivery')}}</span>
                      <p>{{Lang::get('mainpage.delivery_content')}}</p>
                    </div>
                    <div class="img">
                      <img src="evth/public/img/tab-img-4.jpg" alt="Расчет стоимости">
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tab-content-wrapper">
                    <div class="tab-content-text">
                      <span class="tab-comtent-text-title">{{Lang::get('mainpage.payment')}}</span>
                      <p>{{Lang::get('mainpage.payment_content')}}</p>
                    </div>
                    <div class="img">
                      <img src="evth/public/img/tab-img-3.jpg" alt="Расчет стоимости">
                    </div>
                  </div>
                </li>
                <li>
                  <div class="tab-content-wrapper">
                    <div class="tab-content-text">
                      <span class="tab-comtent-text-title">{{Lang::get('mainpage.happy_client')}}</span>
                      <p>{{Lang::get('mainpage.happy_client_content')}}</p>
                    </div>
                    <div class="img">
                      <img src="evth/public/img/tab-img-5.jpg" alt="Расчет стоимости">
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <!-- Может удалить блок ниже?????? -->

          <div class="steps-owl" id="steps-owl">
            <div class="step-item">
              <div class="step-img-wrapper">
                <img src="evth/public/img/tab-img-1.png" class="step-img" alt="">
              </div>
              <div class="step-title-owl">{{Lang::get('mainpage.price_calc')}}</div>
              <div class="step-number">1</div>
              <div class="step-content">
                <span>{{Lang::get('mainpage.price_calc')}}</span>
                <p>{{Lang::get('mainpage.price_calc_content')}}</p>
              </div>
            </div>
            <div class="step-item">
              <div class="step-img-wrapper">
                <img src="evth/public/img/tab-img-2.jpg" class="step-img" alt="">
              </div>
              <div class="step-title-owl">{{Lang::get('mainpage.checkout')}}</div>
              <div class="step-number">2</div>
              <div class="step-content">
                <span>{{Lang::get('mainpage.checkout')}}</span>
                <p>{{Lang::get('mainpage.checkout_content')}}</p>
              </div>
            </div>
            <div class="step-item">
              <div class="step-img-wrapper">
                <img src="evth/public/img/tab-img-3.jpg" class="step-img" alt="">
              </div><!--
              <div class="step-title-owl">Предоплата</div>
              <div class="step-number">3</div>
              <div class="step-content">
                <h3>Предоплата</h3>
                <p>Для подтверждения Заказа понадобиться сделать предоплату в размере 50% от суммы фрахта после таможенного оформления груза (импорт/экспорт)
                  <br> Предоплата производиться на счет Компании Rate&amp;Go в любой валюте мира согласно выставленного счета.
                  <br> Конечная оплата производиться по факту доставки груза в гибкие сроки.</p>
              </div>-->
              <div class="step-title-owl">{{Lang::get('mainpage.delivery')}}</div>
              <div class="step-number">3</div>
              <div class="step-content">
                <span>{{Lang::get('mainpage.delivery')}}</span>
                      <p>{{Lang::get('mainpage.delivery_content')}}</p>
              </div>
            </div>
            <div class="step-item">
              <div class="step-img-wrapper">
                <img src="evth/public/img/tab-img-4.jpg" class="step-img" alt="">
              </div>
              <div class="step-title-owl">{{Lang::get('mainpage.payment')}}</div>
              <div class="step-number">4</div>
              <div class="step-content">
                <span>{{Lang::get('mainpage.payment')}}</span>
                <p>{{Lang::get('mainpage.payment_content')}}</p>
              </div>
            </div>
            <div class="step-item">
              <div class="step-img-wrapper">
                <img src="evth/public/img/tab-img-5.jpg" class="step-img" alt="">
              </div>
              <div class="step-title-owl">{{Lang::get('mainpage.happy_client')}}</div>
              <div class="step-number">5</div>
              <div class="step-content">
                <span>{{Lang::get('mainpage.happy_client')}}</span>
                <p>{{Lang::get('mainpage.happy_client_content')}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="wrapper grey-bg violet-map">
      <canvas id="canvas" class="canvas"></canvas>
      <div class="where-we-works">
        <img src="evth/public/img/test-map.png" class="map-img" alt="">
        <div class="inner">
          <span class="title">{{Lang::get('mainpage.world_delivery')}}</span>
          <div class="works-list">
            <ul>
              <li>{{Lang::get('mainpage.we_transport')}}
                <br>{{Lang::get('mainpage.we_transport2')}}</li>
              <li>{{Lang::get('mainpage.work_in')}}
                <br>{{Lang::get('mainpage.work_in2')}}</li>
              <li>{{Lang::get('mainpage.peranent_clients')}}
                <br>{{Lang::get('mainpage.peranent_clients2')}}</li>
              <li>{{Lang::get('mainpage.covers')}}
                <br>{{Lang::get('mainpage.covers2')}}</li>
            </ul>
          </div>
        </div>
        <div class="works-form-wrapper">
          <div class="works-form-inner">
            <div class="works-form">
              <span class="works-form__title">{{Lang::get('mainpage.calculate_price')}}
                <br>{{Lang::get('mainpage.per_30_secoonds')}}</span>
              <img src="evth/public/img/dummy-arrow.png" alt="duumy arrow" class="works-form__dummy-arrow">
              <div class="works-form__inputs-wrapper">
                <div class="works-form__input-wrapper">
                  <i class="fa fa-map-marker violet-c"></i>
                  <input class="works-form__input works-start-city" type="text" name="from" value="" placeholder="{{Lang::get('mainpage.from_whence')}}">
                </div>
                <div class="works-form__input-wrapper">
                  <i class="fa fa-map-marker violet-c"></i>
                  <input class="works-form__input works-end-city" type="text" name="where" value="" placeholder="{{Lang::get('mainpage.where')}}">
                </div>
                <div class="works-form__input-wrapper">
                  <i class="fa fa-phone violet-c"></i>
                  <input class="works-form__input" type="text" name="phone" value="" placeholder="{{Lang::get('mainpage.phone')}}">
                </div>
                <div class="works-form__button-wrapper">
                  <button type="button" class="works-form__button" onclick="ga('send', 'event', 'Кнопка рассчитать', 'click', 'Экран№4');">{{Lang::get('mainpage.calculate')}}</button>
                </div>
              </div>
            </div>
          </div>
          <div class="cities-gallery-wrapper">
            <span class="cities-gallery__title">{{Lang::get('mainpage.popular_route')}}</span>
            <div class="cities-gallery">
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/gamburg.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/lvov.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Hamburg')}}</span>
                <span class="flag flag-de flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Lviv')}}</span>
                <span class="flag flag-ua flag-end"></span>
                <span class="cities-gallery__price">€1,150.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/milan.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/kiev.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Milan')}}</span>
                <span class="flag flag-it flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Kyiv')}}</span>
                <span class="flag flag-ua flag-end"></span>
                <span class="cities-gallery__price">€1,950.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/varshava.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/odessa.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Warsaw')}}</span>
                <span class="flag flag-pl flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Odessa')}}</span>
                <span class="flag flag-ua flag-end"></span>
                <span class="cities-gallery__price">€1,150.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/moscow.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/berlin.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Moscow')}}</span>
                <span class="flag flag-ru flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Berlin')}}</span>
                <span class="flag flag-de flag-end"></span>
                <span class="cities-gallery__price">€1,400.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/prague.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/kharkov.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Praga')}}</span>
                <span class="flag flag-cz flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Kharkiv')}}</span>
                <span class="flag flag-ua flag-end"></span>
                <span class="cities-gallery__price">€1,550.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/gamburg.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/saint-petersburg.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Hamburg')}}</span>
                <span class="flag flag-de flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.St_Peterburg')}}</span>
                <span class="flag flag-ru flag-end"></span>
                <span class="cities-gallery__price">€1,700.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/turin.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/novosibirsk.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Turin')}}</span>
                <span class="flag flag-it flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Novosibirsk')}}</span>
                <span class="flag flag-ru flag-end"></span>
                <span class="cities-gallery__price">€2,900.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/frankfurt.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/kiev.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Frankfurt')}}</span>
                <span class="flag flag-de flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Kyiv')}}</span>
                <span class="flag flag-ua flag-end"></span>
                <span class="cities-gallery__price">€1,500.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/stambul.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/moscow.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Stambul')}}</span>
                <span class="flag flag-de flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Moscow')}}</span>
                <span class="flag flag-ru flag-end"></span>
                <span class="cities-gallery__price">€3,750.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/duselrdorf.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/ashgabat.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Dusseldorf')}}</span>
                <span class="flag flag-de flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Ashhabad')}}</span>
                <span class="flag flag-tm flag-end"></span>
                <span class="cities-gallery__price">€8,000.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/neapol.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/irkutsk.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Neapol')}}</span>
                <span class="flag flag-it flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Irkutsk')}}</span>
                <span class="flag flag-ru flag-end"></span>
                <span class="cities-gallery__price">€6,100.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/konstanz.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/kharkov.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Konstanca')}}</span>
                <span class="flag flag-ro flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Kharkiv')}}</span>
                <span class="flag flag-ua flag-end"></span>
                <span class="cities-gallery__price">€1,650.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/milan.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/almaty.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Milan')}}</span>
                <span class="flag flag-it flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Almati')}}</span>
                <span class="flag flag-kz flag-end"></span>
                <span class="cities-gallery__price">€8,800.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/orhus.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/debrecen.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Orhus')}}</span>
                <span class="flag flag-dk flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Debrecen')}}</span>
                <span class="flag flag-hu flag-end"></span>
                <span class="cities-gallery__price">€1,900.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/zeebrugge.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/munich.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Zebrugge')}}</span>
                <span class="flag flag-be flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Munhen')}}</span>
                <span class="flag flag-de flag-end"></span>
                <span class="cities-gallery__price">€1,200.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/paris.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/kiev.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Paris')}}</span>
                <span class="flag flag-fr flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Kyiv')}}</span>
                <span class="flag flag-ua flag-end"></span>
                <span class="cities-gallery__price">€1,950.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/budapest.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/samara.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Budapest')}}</span>
                <span class="flag flag-hu flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Samara')}}</span>
                <span class="flag flag-ru flag-end"></span>
                <span class="cities-gallery__price">€2,150.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/oslo.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/krasnodar.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Oslo')}}</span>
                <span class="flag flag-no flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Krasnodar')}}</span>
                <span class="flag flag-ru flag-end"></span>
                <span class="cities-gallery__price">€2,950.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/brno.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/riga.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Brno')}}</span>
                <span class="flag flag-cz flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Riga')}}</span>
                <span class="flag flag-lv flag-end"></span>
                <span class="cities-gallery__price">€1,450.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/minsk.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/astana.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Minsk')}}</span>
                <span class="flag flag-by flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Astana')}}</span>
                <span class="flag flag-kz flag-end"></span>
                <span class="cities-gallery__price">€5,350.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/kiev.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/dortmund.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Kyiv')}}</span>
                <span class="flag flag-ua flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Dortmund')}}</span>
                <span class="flag flag-de flag-end"></span>
                <span class="cities-gallery__price">€1,600.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/roterdam.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/kazan.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Rotterdam')}}</span>
                <span class="flag flag-nl flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Kazan')}}</span>
                <span class="flag flag-ru flag-end"></span>
                <span class="cities-gallery__price">€2,550.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/moscow.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/bolonja.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Moscow')}}</span>
                <span class="flag flag-ru flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Bologna')}}</span>
                <span class="flag flag-it flag-end"></span>
                <span class="cities-gallery__price">€2,050.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/saint-petersburg.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/moscow.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.St_Peterburg')}}</span>
                <span class="flag flag-ru flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Moscow')}}</span>
                <span class="flag flag-ru flag-end"></span>
                <span class="cities-gallery__price">€1,100.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/varshava.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/astana.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Warsaw')}}</span>
                <span class="flag flag-pl flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Astana')}}</span>
                <span class="flag flag-kz flag-end"></span>
                <span class="cities-gallery__price">€1,100.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/parma.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/tashkent.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Parma')}}</span>
                <span class="flag flag-it flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Tashkent')}}</span>
                <span class="flag flag-uz flag-end"></span>
                <span class="cities-gallery__price">€8,550.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/koper.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/odessa.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Koper')}}</span>
                <span class="flag flag-si flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Odessa')}}</span>
                <span class="flag flag-ua flag-end"></span>
                <span class="cities-gallery__price">€1,600.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/roterdam.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/stuttgart.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Rotterdam')}}</span>
                <span class="flag flag-nl flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Stutgart')}}</span>
                <span class="flag flag-de flag-end"></span>
                <span class="cities-gallery__price">€850.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/vroclav.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/gomel.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Vroclav')}}</span>
                <span class="flag flag-pl flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Gomel')}}</span>
                <span class="flag flag-by flag-end"></span>
                <span class="cities-gallery__price">€900.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/zutomir.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/poznan.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Zhitomir')}}</span>
                <span class="flag flag-ua flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Poznan')}}</span>
                <span class="flag flag-pl flag-end"></span>
                <span class="cities-gallery__price">€1,000.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/stambul.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/tashkent.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Stambul')}}</span>
                <span class="flag flag-tr flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Tashkent')}}</span>
                <span class="flag flag-uz flag-end"></span>
                <span class="cities-gallery__price">€7,000.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/dnepropetrovsk.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/tegeran.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Dnepropetrovsk')}}</span>
                <span class="flag flag-ua flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Teheran')}}</span>
                <span class="flag flag-ir flag-end"></span>
                <span class="cities-gallery__price">€4,650.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/ganover.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/baku.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Hannover')}}</span>
                <span class="flag flag-de flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Az_Baku')}}</span>
                <span class="flag flag-az flag-end"></span>
                <span class="cities-gallery__price">€4,600.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/kotka.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/rostov-na-dony.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Kotka')}}</span>
                <span class="flag flag-de flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Rostov_na_Donu')}}</span>
                <span class="flag flag-ru flag-end"></span>
                <span class="cities-gallery__price">€1,750.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/tallin.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/koshica.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.Tallin')}}</span>
                <span class="flag flag-ee flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Koshice')}}</span>
                <span class="flag flag-sk flag-end"></span>
                <span class="cities-gallery__price">€1,750.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
              <div class="cities-gallery__item">
                <div class="triangle-left">
                  <img src="evth/public/img/cities/london.png" alt="">
                </div>
                <div class="triangle-right">
                  <img src="evth/public/img/cities/sumkent.png" alt="">
                </div>
                <span class="cities-gallery__city--start">{{Lang::get('mainpage.London')}}</span>
                <span class="flag flag-gb flag-start"></span>
                <span class="cities-gallery__city--end">{{Lang::get('mainpage.Shimket')}}</span>
                <span class="flag flag-kz flag-end"></span>
                <span class="cities-gallery__price">€8,200.00</span>
                <span class="cities-gallery__cargo-params">{{Lang::get('mainpage.gallery_cargo_params')}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<div class="wrapper grey-bg">
  <div class="inner section">
    <h1 class="title">{{ Lang::get('mainpage.content_on_main_title') }}</h1>
    <div class="content-gray">
      {{ Lang::get('mainpage.content_on_main_content') }}
    </div>
  </div>
</div>

    <div class="wrapper white-bg">


      <footer class="wrapper" id="contacts">
        <img src="evth/public/img/contacts-bg-new.png">
        <div class="inner">
          <div class="contacts">
            <span>{{Lang::get('mainpage.contacts_title')}}</span>
            {{Lang::get('mainpage.contacts')}}
            <p><a href="mailto:info@rate-and-go.com">info@rate-and-go.com</a></p>
            <!-- Вставьте этот тег в заголовке страницы или непосредственно перед закрывающим тегом основной части. -->
                <script src="https://apis.google.com/js/platform.js" async defer>
                    {lang: 'ru'}
                </script>
                <!-- Поместите этот тег туда, где должна отображаться кнопка +1. -->
                <div class="g-plusone" data-annotation="none" data-href="http://rate-and-go.com/"></div>
                
                <div class="fb-like" data-href="http://rate-and-go.com/" data-width="100" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true" style="margin: 4px; position: absolute;"></div>
                
            <div class="copyright"><a href="http://imsmedia.net.ua/" target="_blank">IMS MEDIA 2015</a></div>
          </div>
        </div>
      </footer>
      <div id="modal-how" class="modal">
        <div class="modal-wrapper">
          <div class="modal-inner">
            <span class="close">&times;</span>
            <div>
              <span class="modal-how-span">{{Lang::get('mainpage.how_it_worked')}}</span>
              <div class="row">
                <table>
                  <tbody>
                    <tr>
                      <td>
                        <img src="evth/public/img/modal-how-1.png" alt="">
                      </td>
                      <td>
                        <img src="evth/public/img/modal-how-2.png" alt="">
                      </td>
                      <td>
                        <img src="evth/public/img/modal-how-3.png" alt="">
                      </td>
                      <td>
                        <img src="evth/public/img/modal-how-4.png" alt="">
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <span class="modal-how-title">{{Lang::get('mainpage.choose_route')}}</span>
                      </td>
                      <td>
                        <span class="modal-how-title">{{Lang::get('mainpage.calc_coast')}}</span>
                      </td>
                      <td>
                        <span class="modal-how-title">{{Lang::get('mainpage.order_confirm')}}</span>
                      </td>
                      <td>
                        <span class="modal-how-title">{{Lang::get('mainpage.get_load')}}</span>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <p>{{Lang::get('mainpage.choose_point')}}</p>
                      </td>
                      <td>
                        <p>{{Lang::get('mainpage.get_order')}}</p>
                      </td>
                      <td>
                        <p>{{Lang::get('mainpage.contact_to_you')}}</p>
                      </td>
                      <td>
                        <p>{{Lang::get('mainpage.delivery_to_you')}}</p>
                      </td>
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
    <script src="/evth/public/js/ready.js"></script>
    <!--<script src="evth/public/js/enter.js"></script>-->
    <script src="/evth/public/js/home.js"></script>
    <script src="/evth/public/js/TweenLite.min.js"></script>
    <script src="/evth/public/js/EasePack.min.js"></script>
    <script src="/evth/public/js/rAF.js"></script>
    <script src="/evth/public/js/demo-1.js"></script>
    @include('counters.metrika')
</body>

</html>
