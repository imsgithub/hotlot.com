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

//Route::get('/', function()
//{
//    return View::make('hello');
//});
//Route::get('/', 'CodesController@showMap');
Route::get('/', function(){
    return View::make('public.pages.home');
});
Route::get('/map', ['as'=>'map','uses'=>'CodesController@showNiceMap'] );
Route::post('/order', 'OrdersController@store');


//User Routes 
Route::post('/user/login', 'UsersController@user_login');
Route::get('/logout', function(){
    Session::forget('role');
    return Redirect::back();
});
Route::group(['before'=>'userauth'], function(){
    
    Route::get('/profile', ['as'=>'profile', 'uses'=>'UsersController@show_profile']);
    Route::get('/profile/person', ['as'=>'person', 'uses'=>'UsersController@person_edit']);
    Route::post('/profile/person', 'UsersController@person_save');    
    
    Route::get('/profile/forms', 'FormsController@index');
    
});


//Testing routes

//Route::get('/{lang}/page/{content}', function($lang, $content){    
//    Session::put('lang', $lang);
//    App::setLocale($lang);
//    return Session::get('lang');
//    return Lang::get('lol.'.$content);
//});
//Route::get('/{lang}/lol', function($lang){
//    App::setLocale($lang);    
//    $block = Block::find(1);
//    return $block->content()->firstOrFail()->content;
//});

//Admins routes
Route::get('/admin/login', 'UsersController@show_login_page');
Route::post('/admin', 'UsersController@login');
Route::get('/admin', 'UsersController@admin_index')->before('adminauth');
Route::get('/admin/countries', 'CountriesController@index')->before('adminauth');
Route::get('/admin/countries/{id}', 'CountriesController@show')->before('adminauth');
Route::post('/admin/countries', 'CountriesController@store')->before('adminauth');
Route::post('/admin/countries/update', 'CountriesController@edit')->before('adminauth');

Route::get('/admin/codes', 'CodesController@index')->before('adminauth');
Route::post('/admin/codes', 'CodesController@store')->before('adminauth');
Route::post('/admin/codes/destroy', 'CodesController@destroy')->before('adminauth');

Route::get('/admin/orders', 'OrdersController@index')->before('adminauth');
Route::get('/admin/orders/unreviewed', 'OrdersController@indexUnreviewed')->before('adminauth');
Route::get('/admin/orders/unreviewed/ajax', 'OrdersController@unreviewed')->before('adminauth');
Route::get('/admin/orders/{id}', 'OrdersController@show')->before('adminauth');
Route::post('/admin/orders/{id}', 'OrdersController@edit')->before('adminauth');
Route::get('/admin/orders/condition/{condition}', 'OrdersController@indexByCondition')->before('adminauth');

Route::get('/admin/rules', 'CoeffsController@index')->before('adminauth');
Route::post('admin/rules', 'CoeffsController@store')->before('adminauth');

Route::get('/admin/currencies', 'CurrenciesController@index')->before('adminauth');
Route::post('/admin/currencies', 'CurrenciesController@store')->before('adminauth');
Route::post('/admin/currencies/{id}', 'CurrenciesController@edit')->before('adminauth');
Route::post('/admin/currencies/destroy/{id}', 'CurrenciesController@destroy')->before('adminauth');
//Route::post($uri, $action);

//Add new user route
//Route::get('/lol', function(){
//    $admin = Admin::create([
//        'username'=>'admin',
//        'password'=>Hash::make('isometria123!')
//    ]);
//    return $admin->username;
//});
