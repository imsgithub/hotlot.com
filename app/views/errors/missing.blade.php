<!DOCTYPE html>
<html lang="en">
<head>
	{{App::setLocale(Session::get('lang'))}}
  <meta charset="UTF-8">
  <title>{{Lang::get('errors.title')}}</title>
  <link rel="stylesheet" href="/evth/public/css/newmember.css">
</head>
<body class="page-404">
  <div class="page-404__info">
    <span class="page-404__title">{{Lang::get('errors.page_not_exists')}}</span>
    <a href="/" class="page-404__button">{{Lang::get('errors.to_main')}}</a>
  </div>
</body>
</html>
