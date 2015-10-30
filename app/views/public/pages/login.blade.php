<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Войти на сайт</title>
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
    <div class="register-wrapper">
        <div class="logo login-logo"><a href="/"><img src="/evth/public/img/logo.png" alt="rate and go logo"></a></div>
        <div class="register-form login-form">
            <h2 class="title">Войти на сайт</h2>
            {{Form::open(['url'=>'/login', 'method'=>'POST'])}}
            <div class="input-wrapper">
                <label for="email">Введите ваш email</label>
                {{Form::email('email', '', ['placeholder'=>'ivan@gmail.com', 'id'=>'email'])}}
                {{$errors->first('msg', '<span class="text-danger">:message</span>')}}
            </div>
            <div class="input-wrapper">
                <label for="password">Введите ваш пароль</label>
                {{Form::password('password', ['id'=>'password'])}}                
            </div>      
            <div class="input-wrapper">
                <a href="{{action('RemindersController@getRemind')}}">Забыли пароль?</a>
            </div>
            <div class="input-wrapper">                
                {{Form::button('Войти', ['id'=>'submit', 'class'=>'button', 'type'=>'submit'])}}
            </div>
            {{Form::close()}}
        </div>
    </div>    
</body>
</html>