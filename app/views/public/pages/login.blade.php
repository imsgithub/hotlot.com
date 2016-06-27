<!doctype html>
<html lang="ru">
<head>
{{App::setLocale(Session::get('lang'))}}
    <meta charset="UTF-8">
    <title>{{Lang::get('loginpage.go')}}</title>
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
    <div class="register-wrapper">
        <div class="logo login-logo"><a href="/"><img src="/evth/public/img/logo.png" alt="rate and go logo"></a></div>
        <div class="register-form login-form">
            <h2 class="title">{{Lang::get('loginpage.go')}}</h2>
            <!--a href="/changelanguage/en">En</a>
			<a href="/changelanguage/ru">Ru</a-->
            {{Form::open(['url'=>'/login', 'method'=>'POST'])}}
            <div class="input-wrapper">
                <label for="email">{{Lang::get('loginpage.email')}}</label>
                {{Form::email('email', '', ['placeholder'=>'ivan@gmail.com', 'id'=>'email'])}}
                {{$errors->first('msg', '<span class="text-danger">:message</span>')}}
            </div>
            <div class="input-wrapper">
                <label for="password">{{Lang::get('loginpage.password')}}</label>
                {{Form::password('password', ['id'=>'password'])}}                
            </div>      
            <div class="input-wrapper">
                <a href="{{action('RemindersController@getRemind')}}">{{Lang::get('loginpage.forgot_pass')}}?</a>
            </div>
            <div class="input-wrapper">                
                {{Form::button(Lang::get('loginpage.login'), ['id'=>'submit', 'class'=>'button', 'type'=>'submit'])}}
            </div>
            {{Form::close()}}
        </div>
    </div>   
    @include('counters.metrika')
</body>
</html>