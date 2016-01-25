<!doctype html>
<html lang="ru">
<head>
{{App::setLocale(Session::get('lang'))}}
  <meta charset="UTF-8">
  <title>{{Lang::get('regpage.reg_new_user')}}</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon-precomposed" href="evth/public/img/fav-01.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="evth/public/img/fav-02.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="evth/public/img/fav-03.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="evth/public/img/fav-04.jpg">
  <link rel="stylesheet" href="/evth/public/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="/evth/public/js/underscore.js"></script>
</head>

<body>
  <div class="register-wrapper wrapper-step-1">
    <div class="logo login-logo">
      <a href="/">
        <img src="/evth/public/img/logo.png" alt="rate and go logo">
      </a>
    </div>
    <div class="register-steps">
      <div class="register-step-1 active">
        <div class="step-nav">
          <div class="step-circle">
            1
          </div>
          <span class="step-title">{{Lang::get('regpage.main_info')}}</span>
        </div>
      </div>
      <div class="register-step-2">
        <div class="step-nav">
          <div class="step-circle">
            2
          </div>
          <span class="step-title">{{Lang::get('regpage.who_are_you')}}</span>
        </div>
      </div>
      <div class="register-step-3">
        <div class="step-nav">
          <div class="step-circle">
            3
          </div>
          <span class="step-title">{{Lang::get('regpage.add_info')}}</span>
        </div>
      </div>
    </div>
    <div class="register-contents">
      <div class="register-content-1">
        <div class="input-wrapper">
          <label for="email">{{Lang::get('regpage.enter_email')}}</label>
          <input type="text" name="email" id="email" value="{{Session::get('email')}}">
        </div>
        <div class="input-wrapper">
          <label for="password">{{Lang::get('regpage.enter_pass')}}</label>
          <input type="password" name="password" id="password" value="">
          <div class="helper">
            <span class="icon-eye"></span>
          </div>
        </div>
        <div class="input-wrapper">
          <label for="password-confirm">{{Lang::get('regpage.repeat_pass')}}</label>
          <input type="password" name="password-confirm" id="password-confirm" value="">
          <div class="helper">
            <span class="icon-eye"></span>
          </div>
        </div>
        <div class="input-wrapper">
          <a href="/" class="reg-back-button">{{Lang::get('regpage.to_main')}}</a>
          <span class="reg-next-button step-1-confirm">
            <span>{{Lang::get('regpage.next')}}</span>
          </span>
        </div>
      </div>
      <div class="register-content-2">
        <div class="curtain"></div>
        <div id="workgroups-form"></div>
        <div id="works-form"></div>
        <div class="input-wrapper">
          <span class="reg-back-button back-to-step-1">{{Lang::get('regpage.back')}}</span>
          <span class="reg-next-button step-2-confirm">
            <span>{{Lang::get('regpage.next')}}</span>
          </span>
        </div>
      </div>
      <div class="register-content-3">
        <div class="input-wrapper">
          <label for="name">{{Lang::get('regpage.name')}}</label>
          <input type="text" id="name" name="name" placeholder="{{Lang::get('regpage.name_john')}}">
        </div>
        <div class="input-wrapper">
          <label for="surname">{{Lang::get('regpage.surname')}}</label>
          <input type="text" id="surname" name="surname" placeholder="{{Lang::get('regpage.surname_john')}}">
        </div>
        <div class="input-wrapper">
          <label for="patronymic">{{Lang::get('regpage.f_name')}}</label>
          <input type="text" id="patronymic" name="patronymic" placeholder="{{Lang::get('regpage.f_name_john')}}">
        </div>
        <div class="input-wrapper">
          <label for="phone">{{Lang::get('regpage.phone')}}</label>
          <input type="text" id="phone" name="phone" placeholder="+380931234567">
        </div>
        <div class="input-wrapper">
          <span class="reg-back-button back-to-step-2">{{Lang::get('regpage.back')}}</span>
          <span class="reg-next-button step-3-confirm">
            <span>{{Lang::get('regpage.ready')}}</span>
          </span>
        </div>
      </div>
    </div>
  </div>
<div id="log"></div>
  <script type="text/template" id="workgroups-template">
    <div class="workgroup-wrapper">
      <select name="workgroup">
        <% _.each(workgroups, function(workgroup){ %>
          <option value="<%= workgroup.id %>">
            <%= workgroup.name %>
          </option>
          <% }) %>
      </select>
      <div class="workgroup">
        <% _.each(workgroups, function(workgroup, index){ %>
          <div data-value="<%= index %>" <% if(index===0) {%> class="selected" <% } %> data-selected="0">
            <span class="<%= workgroup.icon %>"></span>
            <span class="workgroup-title"><%= workgroup.name %></span>
          </div>
        <% }) %>
      </div>
    </div>
  </script>
  <script type="text/template" id="works-template">
    <div class="work-wrapper">
      <select name="work">
        <% _.each(works, function(work, index){ %>
          <option value="<%= work.id %>" <% if (index===0) print('selected=""')%>>
            <%= work.name %>
          </option>
        <% }) %>
      </select>
      <div class="work">
        <% _.each(works, function(work, index){ %>
          <span data-value="<%= work.id %>" <% if (index===0) print('class="selected"')%>>
            <%= work.name %>
          </span>
        <% }) %>
      </div>
    </div>
  </script>
  <script type="text/template" id="workgroups">
    {{json_encode($json)}}
  </script>
  <script src="evth/public/js/register.js"></script>
  @include('counters.metrika')
</body>

</html>
