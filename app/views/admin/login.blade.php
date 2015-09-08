<!doctype html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <title>Страница авторизации</title>
        <link href="/evth/admin/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="/evth/admin/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="login-form">
	<h3 class="center">Страница авторизации</h3>
	{{Form::open(['url'=>'/admin', 'method'=>'post'])}}
	<div class="form-group">
		{{Form::text('email','',['placeholder'=>'Имя', 'class'=>'form-control'])}}

	</div>
	<div class="form-group">
		{{Form::password('password',['placeholder'=>'Пароль', 'class'=>'form-control'])}}
	</div>
	<div class="form-group right">
		{{Form::submit('Войти',['class'=>'btn btn-primary'])}}
	</div>
	{{Form::close()}}
</div>
    </body>
</html>

