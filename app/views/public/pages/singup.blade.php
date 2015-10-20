<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация нового пользователя</title>
    <meta name="viewport" content="width=960">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/evth/public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>    
</head>
<body>
    <div class="register-wrapper">
        <div class="logo login-logo"><a href="/"><img src="/evth/public/img/logo.png" alt="rate and go logo"></a></div>
        <div class="register-form">
            <h2 class="title">Регистрация</h2>
            {{Form::open(['url'=>'/user/register', 'method'=>'POST'])}}
            <div class="input-wrapper">
                <label for="email">Введите ваш email</label>
                {{Form::text('email', '', ['placeholder'=>'ivan@gmail.com', 'id'=>'email'])}}
                {{$errors->first('email', '<span class="text-danger">:message</span>')}}
            </div>
            <div class="input-wrapper">
                <label for="password">Введите ваш пароль</label>
                {{Form::password('password', ['id'=>'password'])}}
                {{$errors->first('password', '<span class="text-danger">:message</span>')}}
            </div>
            <div class="input-wrapper">
                <label for="password-confirm">Повторите пароль</label>
                {{Form::password('password-confirm', [ 'id'=>'password-confirm'])}}
            </div>
            <div class="input-wrapper">                
                {{Form::button('зарегистрироваться', ['id'=>'submit', 'class'=>'button', 'type'=>'submit'])}}
            </div>
            {{Form::close()}}
        </div>
    </div>
    <script src="evth/public/js/register.js"> </script>
</body>
</html>