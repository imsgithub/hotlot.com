<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>{{Lang::get('passwordeditpage.title_rem')}}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/evth/public/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="register-wrapper">
            <div class="logo login-logo"><a href="/"><img src="/evth/public/img/logo.png" alt="rate and go logo"></a></div>
            <div class="register-form">
                <h2 class="title">{{Lang::get('passwordeditpage.clear_pass')}}</h2>
                <form action="{{ action('RemindersController@postRemind') }}" method="POST">
                    <div class="input-wrapper">
                        <label for="email">{{Lang::get('passwordeditpage.enter_email')}}</label>
                        <input type="email" name="email" id="email" placeholder="ivan@gmail.com">
                        @if (Session::get('status')!='')
                        <span class="text-success">{{Session::get('status')}}</span>
                        @endif
                        @if (Session::get('error')!='')
                        <span class="text-danger">{{Session::get('error')}}</span>
                        @endif                        
                    </div>
                    <div class="input-wrapper">
                        <button class="button" type="submit">{{Lang::get('passwordeditpage.reset_pass')}}</button>                        
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>