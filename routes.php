<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
/**

*/

Route::get('/', function(){
    return View::make('public.pages.home');
});

//	>>> Языки
Route::any('/changelanguage/{lang}', function($lang){//для кнопочек переключения
	Session::put('lang', $lang);
	if(!empty(Session::get('id'))){
		$userlang = LanguageController::changeProfileLang($lang);
	}
	$myurl = LanguageController::setBestLanguage($lang);
	return Redirect::to($myurl);
});

Route::group(array('prefix' => '{lang}'), function($lang){//для безболезненной смены ru/en ручками
	$myurl = LanguageController::lightLang();
	return Redirect::to($myurl);
});


Route::group(array('prefix' => Session::get('lang')), function () {//просто префикс
	Route::get('/', function()
	{
	    return View::make('public.pages.home');
	});
	Route::get('/sing-up', 'UsersController@newUserRegister');
	Route::get('/login', function()
	{
	    $role = Session::get('role');
	    if ($role != '') {
	        return Redirect::to('/profile');
    }
    return View::make('public.pages.login');
	});
	Route::post('/login', 'UsersController@notAjaxLogin');
	Route::get('/map', ['as'=>'/map','uses'=>'CodesController@showNiceMap'] );

    Route::group(['prefix' => 'pages'], function(){
        Route::get('/', 'PageController@indexPage');
        Route::get('/{alias}', 'PageController@index');
    });
});

//	<<<
Route::get('/abtest', function(){
  return View::make('public.pages.homeABTest');
});
Route::get('/map', ['as'=>'map','uses'=>'CodesController@showNiceMap'] );
Route::post('/order', 'OrdersController@store');
Route::get('/sing-up', 'UsersController@newUserRegister');
Route::get('/login', function() {
    $role = Session::get('role');
    if ($role != '') {
        return Redirect::to('/profile');
    }
    return View::make('public.pages.login');
});
Route::post('/login', 'UsersController@notAjaxLogin');
//      >>> Вывод страниц
Route::group(['prefix' => 'pages'], function(){
    Route::get('/', 'PageController@indexPage');
    Route::get('/{alias}', 'PageController@index');

});
//      <<<
//User Routes

Route::post('/user/login', 'UsersController@user_login');
Route::post('/user/register', 'UsersController@user_register');
Route::post('/user/ajaxregister', 'UsersController@userAjaxRegister');
Route::post('/user/ajaxregister/work', 'UsersController@userWorkAjaxRegister');
Route::get('/logout', function(){
    Session::flush();
    return Redirect::to('/');
});
Route::post('sendmessage', 'SendMessagesController@messageFromHomePage');


Route::get('test_user_profile', 'HomeController@showTestProfile');
Route::group(['before'=>'userauth'], function(){
    Route::get('/profile', ['as'=>'profile', 'uses'=>'UsersController@show_profile']); //+
    Route::get('/profile/person', ['as'=>'person', 'uses'=>'UsersController@person_edit']);
    Route::post('/profile/person', 'UsersController@person_save');
    Route::get('/profile/forms', ['as'=>'forms', 'uses'=>'DeliveryFormsController@index']);//+
    Route::get('/profile/forms/create', ['as'=>'create_form', 'uses'=>'DeliveryFormsController@create']);//+
    Route::post('/profile/forms/create', 'DeliveryFormsController@store');//+
    Route::get('/profile/forms/view/{id}', 'DeliveryFormsController@show');
    Route::get('/profile/forms/edit/{id}', 'DeliveryFormsController@edit');//+
    Route::post('/profile/forms/edit/{id}', 'DeliveryFormsController@update');//+
    Route::get('/profile/forms/delete/{id}', 'DeliveryFormsController@deleteForm');
    Route::post('/profile/forms/edit/{id}/contract', 'DeliveryFormsController@saveContract');
    Route::get('/profile/forms/edit/{id}/contract', 'DeliveryFormsController@showContract');
    Route::post('/profile/confirmagain', 'UsersController@sendConfirmationMail');
});

//Password reminder
Route::get('/password/remind', 'RemindersController@getRemind');
Route::post('/password/remind', 'RemindersController@postRemind');
Route::get('/password/reset/{token}', 'RemindersController@getReset');
Route::post('/password/reset/{token}', 'RemindersController@postReset');

//User confirmation from email Route
Route::get('confirmate/{content}', 'UsersController@confirmUser');


//Admins routes
Route::get('/admin/login', 'UsersController@show_login_page');
Route::post('/admin', 'UsersController@login');

Route::group(['before'=>'adminauth'], function(){
	Route::get('/admin', 'UsersController@admin_index');
	Route::get('/admin/countries', 'CountriesController@index');
	Route::get('/admin/countries/{id}', 'CountriesController@show');
	Route::post('/admin/countries', 'CountriesController@store');
	Route::post('/admin/countries/update', 'CountriesController@edit');

	Route::get('/admin/codes', 'CodesController@index');
	Route::post('/admin/codes', 'CodesController@store');
	Route::post('/admin/codes/destroy', 'CodesController@destroy');

	Route::get('/admin/orders', 'OrdersController@index');
	Route::get('/admin/orders/unreviewed', 'OrdersController@indexUnreviewed');
	Route::get('/admin/orders/unreviewed/ajax', 'OrdersController@unreviewed');
	Route::get('/admin/orders/{id}', 'OrdersController@show');
	Route::post('/admin/orders/{id}', 'OrdersController@edit');
	Route::get('/admin/orders/condition/{condition}', 'OrdersController@indexByCondition');

	Route::get('/admin/rules', 'CoeffsController@index');
	Route::post('admin/rules', 'CoeffsController@store');

	Route::get('/admin/currencies', 'CurrenciesController@index');
	Route::post('/admin/currencies', 'CurrenciesController@store');
	Route::post('/admin/currencies/{id}', 'CurrenciesController@edit');
	Route::post('/admin/currencies/destroy/{id}', 'CurrenciesController@destroy');

   Route::get('/admin/users', 'UsersController@show_users');
   Route::get('/admin/users/{id}/forms', 'DeliveryFormsController@show_user_forms');
   Route::get('/admin/users/{user_id}/forms/{form_id}', 'DeliveryFormsController@show_user_form');
   Route::post('/admin/users/{user_id}/forms/{form_id}', 'DeliveryFormsController@update_user_form');
   Route::get('/admin/users/{user_id}/forms/{form_id}/print', 'DeliveryFormsController@printForm');
   Route::get('/admin/users/{user_id}/forms/{form_id}/contract', 'DeliveryFormsController@printForm');
   Route::get('/admin/forms', 'DeliveryFormsController@adminIndex');

   Route::get('/admin/cargotypes', 'CargoTypesController@index');
   Route::post('/admin/cargotypes', 'CargoTypesController@store');
   Route::post('/admin/cargotypes/{id}', 'CargoTypesController@edit');
   Route::post('/admin/cargotypes/destroy/{id}', 'CargoTypesController@destroy');

   Route::get('/admin/uaareas','UaCoeffsController@index');
   Route::post('/admin/uaareas', 'UaCoeffsController@addArea');
   Route::delete('/admin/uaareas','UaCoeffsController@destroyArea');

   Route::get('/admin/uacoeffs','UaCoeffsController@indexCoeffs');
   Route::get('/admin/uacoeffs/{id}','UaCoeffsController@editCoeffs');
   Route::post('/admin/uacoeffs/{id}','UaCoeffsController@storeCoeffs');

   Route::get('/admin/miniadmin', 'UsersController@indexMiniAdmin');
   Route::get('/admin/miniadmin/create', 'UsersController@createMiniAdmin');
   Route::post('/admin/miniadmin', 'UsersController@storeMiniAdmin');
   Route::delete('/admin/miniadmin/{id}', 'UsersController@deleteMiniAdmin');

   Route::get('/admin/workgroupedit', 'WorkgroupsController@indexWorkGroupEdit');
   Route::get('/admin/workgroupedit/create', 'WorkgroupsController@createWorkGroupEdit');
   Route::post('/admin/workgroupedit/edit/{id}', 'WorkgroupsController@editWorkGroupEdit');
   Route::post('/admin/workgroupedit/editstore/{id}', 'WorkgroupsController@editStoreWorkGroupEdit');
   Route::post('/admin/workgroupedit', 'WorkgroupsController@storeWorkGroupEdit');
   Route::delete('/admin/workgroupedit/{id}', 'WorkgroupsController@deleteWorkGroupEdit');

   Route::get('/admin/workedit', 'WorksController@indexWorkEdit');
   Route::get('/admin/workedit/create', 'WorksController@createWorkEdit');
   Route::post('/admin/workedit/edit/{id}', 'WorksController@editWorkEdit');
   Route::post('/admin/workedit/editstore/{id}', 'WorksController@editStoreWorkEdit');
   Route::post('/admin/workedit', 'WorksController@storeWorkEdit');
   Route::delete('/admin/workedit/{id}', 'WorksController@deleteWorkEdit');

/*   Route::get('/admin/postedit', 'PostController@indexPostEdit');
   Route::get('/admin/postedit/create', 'PostController@createPostEdit');
   Route::post('/admin/postedit/edit/{id}', 'PostController@editPostEdit');
   Route::post('/admin/postedit/editstore/{id}', 'PostController@editStorePostEdit');
   Route::post('/admin/postedit', 'PostController@storePostEdit');
   Route::delete('/admin/postedit/{id}', 'PostController@deletePostEdit');
*/
   Route::get('/admin/contentedit', 'ContentController@indexContentEdit');
   Route::get('/admin/contentedit/create', 'ContentController@createContentEdit');
   Route::post('/admin/contentedit/edit/{id}', 'ContentController@editContentEdit');
   Route::post('/admin/contentedit/editstore/{id}', 'ContentController@editStoreContentEdit');
   Route::post('/admin/contentedit', 'ContentController@storeContentEdit');
   Route::delete('/admin/contentedit/{id}', 'ContentController@deleteContentEdit');

    //      >>> редактор страниц
   Route::get('/admin/contentpage', 'ContentPageController@indexContentPage');
   Route::get('/admin/contentpage/create', 'ContentPageController@createContentPage');
   Route::post('/admin/contentpage/edit/{id}', 'ContentPageController@editContentPage');
   Route::post('/admin/contentpage/editstore/{id}', 'ContentPageController@editStoreContentPage');
   Route::post('/admin/contentpage', 'ContentPageController@storeContentPage');
   Route::post('/admin/contentpage/delete/{id}', 'ContentPageController@deleteContentPage');
});
// Route::get('/bla', function(){
//   $user=User::find(77);
//   if(!$user->confirmation) {
//     $confirmation = new Confirmation([
//       'content'=>'asdfasdfasdfasdf',''
//     ]);
//     $user->confirmation()->save($confirmation);
//   } else {
//     $user->confirmation->content = 'ololololololololo';
//     $user->confirmation->save();
//   }
// });
// Route::get('lol', 'UsersController@testCM');
// Route::get('testemail', function(){
//   return View::make('emails.confirmation');
// });
// Route::get('newpass', function(){
//   return Hash::make('mesopotamia321!');
// });
//Route::post($uri, $action);

//Add new user route
//Route::get('/lol', function(){
//    $admin = Admin::create([
//        'username'=>'admin',
//        'password'=>Hash::make('isometria123!')
//    ]);
//    return $admin->username;
//});
// Route::get('/lol',function(){
//   $users = User::all();
//   foreach ($users as $user) {
//     if ($user->work()->first()!=null) {
//         var_dump($user->work()->first()->name);
//         var_dump($user->work()->first()->workgroup->name);
//     }
//
//   }
// });
