<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{Lang::get('passwordeditpage.title_new')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/evth/public/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="register-wrapper">
            <div class="logo login-logo"><a href="/"><img src="/evth/public/img/logo.png" alt="rate and go logo"></a></div>
            <div class="register-form">
                <h2 class="title">{{Lang::get('passwordeditpage.change_pass')}}</h2>
                <form action="{{ action('RemindersController@postReset') }}" method="POST">
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="input-wrapper">
                        @if (Session::get('error')!='')
                        <span class="text-danger">{{Session::get('error')}}</span>
                        @endif
                        <label for="email">{{Lang::get('passwordeditpage.you_email')}}</label>
                        <input type="email" name="email" id="email">
                    </div>                    
                    <div class="input-wrapper">
                        <label for="password">{{Lang::get('passwordeditpage.new_pass')}}</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <div class="input-wrapper">
                        <label for="password_confirmation">{{Lang::get('passwordeditpage.pass_repeat')}}</label>
                        <input type="password" name="password_confirmation">
                    </div>
                    <div class="input-wrapper">
                        <button class="button" type="submit">{{Lang::get('passwordeditpage.change_pass_but')}}</button>
                    </div>   
                </form>
            </div>            
        </div>        
    </body>
</html>