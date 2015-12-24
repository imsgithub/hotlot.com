<?php

/*
|--------------------------------------------------------------------------
| Application & Route Filters
|--------------------------------------------------------------------------
|
| Below you will find the "before" and "after" events for the application
| which may be used to do any work before or after a request into your
| application. Here you may also register your custom route filters.
|
*/

App::before(function($request)
{
	$site_url = url();
	if (array_key_exists('HTTP_REFERER', $_SERVER)) {
		$referer = $_SERVER['HTTP_REFERER'];
		if (strrpos($referer, $site_url) === false) {
			Session::put('referer', $_SERVER['HTTP_REFERER']);
		}
	}
});


App::after(function($request, $response)
{
	//
});

/*
|--------------------------------------------------------------------------
| Authentication Filters
|--------------------------------------------------------------------------
|
| The following filters are used to verify that the user of the current
| session is logged into this application. The "basic" filter easily
| integrates HTTP Basic authentication for quick, simple checking.
|
*/

Route::filter('auth', function()
{
	if (Auth::guest())
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('/');
		}
	}
});

Route::filter('userauth', function()
{
	if (Session::get('role')!='member')
	{
		if (Request::ajax())
		{
			return Response::make('Unauthorized', 401);
		}
		else
		{
			return Redirect::guest('/');
		}
	}
});

Route::filter('adminauth', function($route)
{
	if ((Session::get('role')!='admin')) {
		if (Session::get('role')!='miniadmin') {
			if (Request::ajax()) {
				return Response::make('Unauthorized', 401);
			}	else {
				return Redirect::guest('/admin/login');
			}
		} elseif (Session::get('role')=='miniadmin') {
			$url = $route->getUri();
			$permitted = [
				'admin',
				'admin/orders',
				'admin/orders/unreviewed',
				'admin/orders/unreviewed/ajax',
				'admin/orders/{id}',
				'admin/orders/{id}',
				'admin/orders/condition/{condition}',
				'admin/users',
				'admin/users/{id}/forms',
				'admin/users/{user_id}/forms/{form_id}',
				'admin/users/{user_id}/forms/{form_id}',
				'admin/users/{user_id}/forms/{form_id}/print',
				'admin/forms',
			];
			if (!in_array($url, $permitted)) {
				return View::make('admin.denied');
			}
		}
	}
});
Route::filter('miniadminauth', function($route, $request, $response){


});
Route::filter('auth.basic', function()
{
	return Auth::basic();
});

/*
|--------------------------------------------------------------------------
| Guest Filter
|--------------------------------------------------------------------------
|
| The "guest" filter is the counterpart of the authentication filters as
| it simply checks that the current user is not logged in. A redirect
| response will be issued if they are, which you may freely change.
|
*/

Route::filter('guest', function()
{
	if (Auth::check()) return Redirect::to('/');
});

/*
|--------------------------------------------------------------------------
| CSRF Protection Filter
|--------------------------------------------------------------------------
|
| The CSRF filter is responsible for protecting your application against
| cross-site request forgery attacks. If this special token in a user
| session does not match the one given in this request, we'll bail.
|
*/

Route::filter('csrf', function()
{
	if (Session::token() != Input::get('_token'))
	{
		throw new Illuminate\Session\TokenMismatchException;
	}
});
