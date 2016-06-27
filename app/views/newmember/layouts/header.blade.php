<!doctype html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>{{$meta['title']}}</title>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <link rel="stylesheet" href="/evth/public/css/owl.carousel.css">
  <link rel="stylesheet" href="/evth/public/css/owl.theme.css">
  <link rel="stylesheet" href="/evth/public/css/jquery.datetimepicker.css">
  <link rel="stylesheet" href="/evth/public/css/newmember.css">
  <link rel="stylesheet" href="/evth/public/css/printContract.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon-precomposed" href="/evth/public/img/fav-01.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/evth/public/img/fav-02.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/evth/public/img/fav-03.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/evth/public/img/fav-04.jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
  <script src="/evth/public/js/jquery.datetimepicker.js"></script>
  <script src="/evth/public/js/owl.carousel.min.js"></script>
  <script src="/evth/public/js/underscore.js"></script>
</head>
<body>
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
  @if(Session::get('confirmed')==0)
    @include('newmember.notconfirmed')
  @endif
  <script type="text/template" id="work-id">
    {{$work ? $work->id : 0}}
  </script>
  <script type="text/template" id="workgroup-id">
    {{$work ? $work->workgroup->id : 0}}
  </script>
  <script type="text/template" id="workgroups-json">
    {{json_encode($json)}}
  </script>
  <script type="text/template" id="workgroups-template">
    <div class="input-wrapper">
      <label for="user-settings-workgroup">Кто вы?</label>
      <select name="workgroup" id="user-settings-workgroup">
        <% _.each(workgroups, function(workgroup){ %>
          <option value="<%= workgroup.id %>">
            <%= workgroup.name %>
          </option>
          <% }) %>
      </select>
    </div>
  </script>
  <script type="text/template" id="works-template">
    <div class="input-wrapper">
      <select name="work"  id="user-settings-work">
        <% _.each(works, function(work, index){ %>
          <option value="<%= work.id %>" <% if (index===0) print('selected=""')%>>
            <%= work.name %>
          </option>
        <% }) %>
      </select>
    </div>
  </script>
  <div class="overlay">
    <div class="header-wrapper">
      <header class="header">
        <a href="/" class="header__logo">
          <svg version="1.1" width="105" height="20" id="logo_svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 245.4 47.4" enable-background="new 0 0 245.4 47.4" xml:space="preserve">
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
              <path fill="#ffffff" d="M32.5,25.4c-3.9,0-7,3.2-7.1,7.1v14.9h18.5c1.9,0,3.5-1.6,3.5-3.5V25.4H32.5z M39.7,35.4L39.7,35.4c-1.2,3.4-4.3,6.6-4.3,6.6s-3.1-3.2-4.3-6.6c-0.5-1.6-0.2-3.4,1.1-4.7c1.8-1.8,4.6-1.8,6.4,0C39.9,32,40.3,33.8,39.7,35.4z"
              />
            </g>
          </svg>
        </a>
        <a href="/changelanguage/en">En</a>
        <a href="/changelanguage/ru">Ru</a>
        <div class="user-block">
          <span title="{{Lang::get('profilepage.prof_seettings')}}" class="user-block__settings">
            <span class="icon-cog"></span>
          </span>
          <div class="user-block__settings-layout">
            <span class="user-block__settings-title">{{Lang::get('profilepage.prof_seettings')}}</span>
            <div class="input-wrapper">
              <label for="user-settings-surname">{{Lang::get('profilepage.surname')}}</label>
              <input type="text" id="user-settings-surname" name="surname" value="{{$user->person ? $user->person->surname : ''}}" data-old-value="{{$user->person ? $user->person->surname : ''}}">
            </div>
            <div class="input-wrapper">
              <label for="user-settings-name">{{Lang::get('profilepage.name')}}</label>
              <input type="text" id="user-settings-name" name="name" value="{{$user->person ? $user->person->name : ''}}" data-old-value="{{$user->person ? $user->person->name : ''}}">
            </div>
            <div class="input-wrapper">
              <label for="user-settings-patronymic">{{Lang::get('profilepage.f_name')}}</label>
              <input type="text" id="user-settings-patronymic" name="patronymic" value="{{$user->person ? $user->person->patronymic : ''}}" data-old-value="{{$user->person ? $user->person->patronymic : ''}}">
            </div>
            <div class="input-wrapper">
              <label for="user-settings-phone">{{Lang::get('profilepage.phone')}}</label>
              <input type="text" id="user-settings-phone" name="phone" value="{{$user->person ? $user->person->phone : ''}}" data-old-value="{{$user->person ? $user->person->phone : ''}}">
            </div>
            <div id="workgroups-block"></div>
            <div id="works-block"></div>
            <div class="input-wrapper">
              <a href="#" class="user-block__button edit">{{Lang::get('profilepage.edit')}}</a>
              <a href="#" class="user-block__button--transparent cancel">{{Lang::get('profilepage.cancel')}}</a>
            </div>
            <div class="user-block__settings-layout-curtain spin-curtain"><i class="fa fa-spinner fa-pulse"></i></div>
            <div class="user-block__settings-layout-curtain response-curtain"><span class="response"></span></div>
          </div>{{App::setLocale(Session::get('lang'))}}
          <a href="/profile" class="user-block__name">{{Lang::get('profilepage.private_cab')}} {{$user->email}}</a>
          <a href="/logout" title="{{Lang::get('member.logout.description')}}" class="user-block__logout">{{Lang::get('member.logout.title')}}</a>
        </div>
      </header>
    </div>
    @include('newmember.layouts.nav')
