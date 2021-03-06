<!doctype html>
<html lang="ru">

<head>

  <meta charset="UTF-8">
  {{App::setLocale(Session::get('lang'))}}
  <title>{{Lang::get('mainpage.title')}}</title>
  <meta name="description" content="Международные грузоперевозки от компании Rate and Go &#10004;Быстрая доставка &#10004;Гарантия качества &#10004;Бесплатная страховка!">
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
{{App::setLocale(Session::get('lang'))}}
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
            <a href="/changelanguage/en">En</a>
            <a href="/changelanguage/ru">Ru</a>
          </div>
          <div class="logo">
            <svg version="1.1" class="logo-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 147 29" enable-background="new 0 0 147 29" xml:space="preserve">
              <g>
                <g>
                  <g>
                    <path fill="#fff" class="orange-path" d="M37.7,5.7c4.9,0,7.3,3.2,7.3,6.6c0,3.3-2.1,6.1-5.7,6.4l7.4,8.7l-2.1,1.1l-9.2-11.1h-0.1v10.6l-2.2,0.3
				V5.7H37.7z M35.2,17.1h2.7c2.7,0,4.7-2.1,4.7-4.7c0-2.4-1.7-4.6-4.8-4.6h-2.6V17.1z" />
                  </g>
                  <g>
                    <path fill="#fff" class="orange-path" d="M49.5,12.1c1.1-0.4,2.7-0.9,4.5-0.9c5.7,0,5.8,4.2,5.8,5.1v11.5l-1.9,0.4V26h-0.1c-1.1,1.8-3,2.3-4.7,2.3
				c-3.2,0-6-2.2-6-5.9c0-3.8,3.1-5.8,6-5.8c1.5,0,3.3,0.5,4.6,2h0.1v-2.5c0-1.8-1.6-3.1-3.9-3.1c-1.5,0-3.1,0.5-4.3,1l-0.9,0.4
				L49.5,12.1z M49.2,22.3c0,2,1.3,4.2,4.3,4.2c2.9,0,4.4-1.9,4.4-4c0-2-1.5-4.1-4.6-4.1C50.7,18.4,49.2,20.3,49.2,22.3z" />
                  </g>
                  <g>
                    <path fill="#fff" class="orange-path" d="M63.9,7.7l2-1v5h4.4v1.8h-4.4v10.1c0,1.1,0.1,2.9,2.9,2.9c0.5,0,0.8-0.1,1.5-0.4V28
				c-0.6,0.2-1.3,0.3-2,0.3c-2.4,0-4.4-1.3-4.4-4.6V13.5h-2.2l0.5-1.8h1.7V7.7z" />
                  </g>
                  <g>
                    <path fill="#fff" class="orange-path" d="M86.3,25.9c-1.6,1.4-3.7,2.4-6.3,2.4c-5.8,0-8.6-4.7-8.6-8.6c0-4.7,3.6-8.5,8.4-8.5
				c2.5,0,5.2,1.1,6.9,3.9l-12.5,7.5c1.1,2.4,3.5,3.7,5.7,3.7c2.3,0,4.8-1.3,6.4-2.9V25.9z M83.9,14.7c-0.9-0.9-2.2-1.6-4.1-1.6
				c-2.9,0-6.4,2.1-6.4,6.4c0,0.5,0.1,0.9,0.2,1.4L83.9,14.7z" />
                  </g>
                  <g>
                    <path fill="#fff" class="violet-path" d="M101,20.9l3.9-3.9l1.5,1.5l-4.1,4.1l4,4.6l-1.8,1.2l-3.6-4.4l-1.2,1.2c-1.7,1.7-3,3.2-5.5,3.2
				c-3.2,0-5.6-2.4-5.6-5.6c0-3.1,2-4.6,3.5-6l1.6-1.5c-1.9-2.4-2.1-4.2-2.1-5.1c0-3,2.1-5,5-5c2.8,0,4.5,2.1,4.5,4.1
				c0,2.3-1.8,3.8-3.3,5.2l-1.1,1L101,20.9z M94.9,16.8l-1.4,1.3c-1.2,1.1-2.9,2.5-2.9,4.7c0,2.2,2,3.4,3.5,3.4
				c1.8,0,3.2-1.7,4.2-2.7l1.2-1.2L94.9,16.8z M95.6,13.7c1.3-1,3.1-2.6,3.1-4.5c0-1.6-1.6-2.1-2.5-2.1c-1.4,0-2.7,1.1-2.7,3.1
				c0,1.3,0.6,2.7,1.6,3.9L95.6,13.7z" />
                  </g>
                  <g>
                    <path fill="#fff" class="violet-path" d="M126.3,9.8c-1.4-1.3-3.6-2.6-6.5-2.6c-4.9,0-9.3,3.9-9.3,9.7c0,4.6,3.5,9.4,9.5,9.4c2,0,4-0.6,5.9-2V18
				h-7.4l0.7-2.1h9v9.4c-3.2,2.7-6.4,3-8.3,3c-7.7,0-11.8-6-11.8-11.4c0-5.8,4.2-11.8,11.7-11.8c2.3,0,5.1,0.6,7.8,2.9L126.3,9.8z" />
                  </g>
                  <g>
                    <path fill="#fff" class="violet-path" d="M138.9,11.3c4.7,0,8.5,3.8,8.5,8.5c0,4.7-3.8,8.5-8.5,8.5c-4.7,0-8.5-3.8-8.5-8.5
				C130.4,15.1,134.3,11.3,138.9,11.3z M138.9,26.5c3.6,0,6.4-3.1,6.4-6.7c0-3.7-2.9-6.7-6.4-6.7c-3.5,0-6.4,3-6.4,6.7
				C132.5,23.5,135.4,26.5,138.9,26.5z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path fill="#fff" class="violet-path" d="M26.4,28.7H2.1c-1.2,0-2.1-0.9-2.1-2.1V2.3c0-1.2,0.9-2.1,2.1-2.1h24.3c1.2,0,2.1,0.9,2.1,2.1v24.3
				C28.5,27.8,27.5,28.7,26.4,28.7z M2.1,0.9c-0.8,0-1.5,0.7-1.5,1.5v24.3c0,0.8,0.7,1.5,1.5,1.5h24.3c0.8,0,1.5-0.7,1.5-1.5V2.3
				c0-0.8-0.7-1.5-1.5-1.5H2.1z" />
                  </g>
                  <g>
                    <polygon fill="#fff" class="orange-path" points="6.6,20.4 3.8,20.4 3.8,22 6.6,22 6.6,24.8 8.2,24.8 8.2,22 11.1,22 11.1,20.4 8.2,20.4 8.2,17.6
				6.6,17.6 			" />
                  </g>
                  <g>
                    <polygon fill="#fff" class="orange-path" points="10.6,9.4 8.6,7.4 10.6,5.4 9.4,4.3 7.5,6.2 5.4,4.3 4.3,5.4 6.3,7.4 4.3,9.4 5.4,10.5 7.5,8.5
				9.4,10.5 			" />
                  </g>
                  <g>
                    <g>
                      <rect x="17.2" y="6.6" fill="#fff" class="orange-path" width="7.2" height="1.6" />
                    </g>
                    <g>
                      <rect x="20" y="9.4" fill="#fff" class="orange-path" width="1.6" height="1.6" />
                    </g>
                    <g>
                      <rect x="20" y="3.8" fill="#fff" class="orange-path" width="1.6" height="1.6" />
                    </g>
                  </g>
                  <g>
                    <rect x="0.5" y="14.5" fill="#fff" class="violet-path" width="11.5" height="0.7" />
                  </g>
                  <g>
                    <rect x="13.9" y="0.6" fill="#fff" class="violet-path" width="0.7" height="12.3" />
                  </g>
                  <g>
                    <path fill="#fff" class="violet-path" d="M22.6,14.9h-3h-0.1c-2.7,0-4.8,2.2-4.9,4.9v0.1v3V28h-0.9v-8.1c0-1.1,0.3-2.1,0.9-3
				c0.5-0.8,1.1-1.4,1.9-1.9c0.9-0.5,1.9-0.9,3-0.9h0h0h8.1v0.9H22.6z" />
                    <path fill="#fff" class="violet-path" d="M15.3,28.6h-2.1v-8.8c0-1.2,0.3-2.3,0.9-3.3c0.5-0.9,1.3-1.6,2.1-2.1c1-0.6,2.2-0.9,3.3-0.9h8.8v2.1h-8.8
				c-2.3,0-4.2,1.9-4.3,4.3V28.6z" />
                  </g>
                </g>
                <g>
                  <g>
                    <path fill="#fff" class="violet-path" d="M23.9,21.5c0.3-1,0.1-2.1-0.6-2.8c-1.1-1.1-2.8-1.1-3.8,0c-0.8,0.8-1,1.9-0.6,2.8c0.7,2,2.6,4,2.6,4
				S23.1,23.6,23.9,21.5L23.9,21.5z M21.9,21.4c-0.3,0.3-0.8,0.3-1.2,0c-0.3-0.3-0.3-0.8,0-1.2c0.3-0.3,0.8-0.3,1.2,0
				C22.2,20.6,22.2,21.1,21.9,21.4z" />
                  </g>
                </g>
              </g>
            </svg>

          </div>
          <!--Composer view for unsigned users-->
          @include('composers.sign')
          <!--End of composer view for unsigned users-->
        </header>
        <h1 class="top-title">{{Lang::get('mainpage.coast1')}}</h1>
        <span class="top-subtitle">{{Lang::get('mainpage.belay')}}<br><a href="/changelanguage/en">En</a>
            <a href="/changelanguage/ru">Ru</a></span>
      </div>
      <div class="wrapper violet-bg">
        <div class="inner">
          <div class="top-form">
            <form action="/map" method="GET">
              <span class="top-form-title">{{Lang::get('mainpage.select_a_route')}}</span>
              <div class="top-form-inputs">
                <div class="from"><i class="fa fa-map-marker violet-c"></i>
                  <input name="start" type="text" placeholder="{{Lang::get('mainpage.from_whence')}}">
                </div>
                <div class="arrows"><i class="evth-arrows"></i></div>
                <div class="where"><i class="fa fa-map-marker violet-c"></i>
                  <input name="end" type="text" placeholder="{{Lang::get('mainpage.where')}}">
                </div>
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
    <div class="wrapper">
      <div class="inner section">
        <h2 class="title">{{Lang::get('mainpage.world_delivery')}}</h2>
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
    <div class="wrapper">
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
                      <h3>{{Lang::get('mainpage.price_calc')}}</h3>
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
                      <h3>{{Lang::get('mainpage.checkout')}}</h3>
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
                      <h3>{{Lang::get('mainpage.delivery')}}</h3>
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
                      <h3>{{Lang::get('mainpage.payment')}}</h3>
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
                      <h3>{{Lang::get('mainpage.happy_client')}}</h3>
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
          <div class="steps-owl" id="steps-owl">
            <div class="step-item">
              <div class="step-img-wrapper">
                <img src="evth/public/img/tab-img-1.png" class="step-img" alt="">
              </div>
              <div class="step-title-owl">{{Lang::get('mainpage.price_calc')}}</div>
              <div class="step-number">1</div>
              <div class="step-content">
                <h3>{{Lang::get('mainpage.price_calc')}}</h3>
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
                <h3>{{Lang::get('mainpage.checkout')}}</h3>
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
                <h3>{{Lang::get('mainpage.delivery')}}</h3>
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
                <h3>{{Lang::get('mainpage.payment')}}</h3>
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
                <h3>{{Lang::get('mainpage.happy_client')}}</h3>
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
          <h2 class="title">{{Lang::get('mainpage.world_delivery')}}</h2>
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
    <div class="wrapper white-bg">
      <span class="title">{{Lang::get('mainpage.services')}}</span>
      <div class="inner-extended">
        <div id="serviceTarget"></div>
        <div class="service-row">
          <div class="col-4">
            <div class="service">
              <div class="service-icon">
                <span class="icon-car"></span>
              </div>
              <div class="service-description">
                <h3>{{Lang::get('mainpage.Automobile_int_trans_title')}}</h3>
                <div class="display">
                  {{Lang::get('mainpage.Automobile_int_trans')}}
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
                <h3>{{Lang::get('mainpage.container_shipping_title')}}</h3>
                <div class="display">
                  {{Lang::get('mainpage.container_shipping')}}
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
                <h3>{{Lang::get('mainpage.groupage_cargo_title')}}</h3>
                <div class="display">
                  {{Lang::get('mainpage.groupage_cargo')}}
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
                <h3>{{Lang::get('mainpage.multimodal_transportation_title')}}</h3>
                <div class="display">
                  {{Lang::get('mainpage.multimodal_transportation')}}
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
                <h3>{{Lang::get('mainpage.brokerage_services_title')}}</h3>
                <div class="display">
                  {{Lang::get('mainpage.brokerage_services')}}
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
                <h3>{{Lang::get('mainpage.insurance_title')}}</h3>
                <div class="display">
                  {{Lang::get('mainpage.insurance')}}
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
                <h3>{{Lang::get('mainpage.oversized_transport_title')}}</h3>
                <div class="display">
                  {{Lang::get('mainpage.oversized_transport')}}
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
                <h3>{{Lang::get('mainpage.storage_title')}}</h3>
                <div class="display">
                  {{Lang::get('mainpage.storage')}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="wrapper">
        <img src="evth/public/img/contacts-bg-new.png">
        <div class="inner">
          <div class="contacts">
            <span>{{Lang::get('mainpage.contacts_title')}}</span>
            {{Lang::get('mainpage.contacts')}}
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
              <span>{{Lang::get('mainpage.how_it_worked')}}</span>
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
                        <h3>{{Lang::get('mainpage.choose_route')}}</h3>
                      </td>
                      <td>
                        <h3>{{Lang::get('mainpage.calc_coast')}}</h3>
                      </td>
                      <td>
                        <h3>{{Lang::get('mainpage.order_confirm')}}</h3>
                      </td>
                      <td>
                        <h3>{{Lang::get('mainpage.get_load')}}</h3>
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
