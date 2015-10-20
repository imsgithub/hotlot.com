<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Новый пароль</title>
        <meta name="viewport" content="width=960">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/evth/public/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="register-wrapper">
            <div class="logo login-logo"><a href="/"><img src="/evth/public/img/logo.png" alt="rate and go logo"></a></div>
            <div class="register-form">
                <h2 class="title">Изменить пароль</h2>
                <form action="{{ action('RemindersController@postReset') }}" method="POST">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-wrapper">
                        @if (Session::get('error')!='')
                        <span class="text-danger">{{Session::get('error')}}</span>
                        @endif
                        <label for="email">Введите ваш email</label>
                        <input type="email" name="email" id="email">
                    </div>                    
                    <div class="input-wrapper">
                        <label for="password">Ваш новый пароль</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="input-wrapper">
                        <label for="password_confirmation">Пароль еще раз</label>
                        <input type="password" name="password_confirmation">
                    </div>
                    <div class="input-wrapper">
                        <button class="button" type="submit">Сменить пароль</button>
                    </div>   
                </form>
            </div>            
        </div>        
    </body>
</html>