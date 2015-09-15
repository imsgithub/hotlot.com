<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Восстановление пароля</h2>

		<div>
			Для сброса пароля и создания нового заполните форму по ссылке: {{ URL::to('password/reset', array($token)) }}.<br/>
			Ссылка достпна {{ Config::get('auth.reminder.expire', 60) }} минут.
		</div>
	</body>
</html>
