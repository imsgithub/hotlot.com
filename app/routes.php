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
Route::get('/abtest', function(){
  return View::make('public.pages.homeABTest');
});
Route::get('/map', ['as'=>'map','uses'=>'CodesController@showNiceMap'] );
Route::post('/order', 'OrdersController@store');
Route::get('/sing-up', 'UsersController@newUserRegister');
Route::get('/login', function() {
    $role = Session::get('role');
    if ($role != '') {
        return Redirect::to('/');
    }
    return View::make('public.pages.login');
});
Route::post('/login', 'UsersController@notAjaxLogin');
//User Routes

Route::post('/user/login', 'UsersController@user_login');
Route::post('/user/register', 'UsersController@user_register');
Route::post('/user/ajaxregister', 'UsersController@userAjaxRegister');
Route::post('/user/ajaxregister/work', 'UsersController@userWorkAjaxRegister');
Route::get('/logout', function(){
    Session::flush();
    return Redirect::back();
});
Route::post('sendmessage', 'SendMessagesController@messageFromHomePage');


Route::get('test_user_profile', 'HomeController@showTestProfile');
Route::group(['before'=>'userauth'], function(){

    Route::get('/profile', ['as'=>'profile', 'uses'=>'UsersController@show_profile']);
    Route::get('/profile/person', ['as'=>'person', 'uses'=>'UsersController@person_edit']);
    Route::post('/profile/person', 'UsersController@person_save');
    Route::get('/profile/forms', ['as'=>'forms', 'uses'=>'DeliveryFormsController@index']);
    Route::get('/profile/forms/create', ['as'=>'create_form', 'uses'=>'DeliveryFormsController@create']);
    Route::post('/profile/forms/create', 'DeliveryFormsController@store');
    Route::get('/profile/forms/view/{id}', 'DeliveryFormsController@show');
    Route::get('/profile/forms/edit/{id}', 'DeliveryFormsController@edit');
    Route::post('/profile/forms/edit/{id}', 'DeliveryFormsController@update');
    Route::post('/profile/forms/edit/{id}/contract', 'DeliveryFormsController@saveContract');
    Route::get('/profile/forms/edit/{id}/contract', 'DeliveryFormsController@showContract');
});

//Password reminder
Route::get('/password/remind', 'RemindersController@getRemind');
Route::post('/password/remind', 'RemindersController@postRemind');
Route::get('/password/reset/{token}', 'RemindersController@getReset');
Route::post('/password/reset/{token}', 'RemindersController@postReset');

// Route::get('/bla', function(){
//   $user = User::find(Session::get('id'));
//   var_dump($user->person);
// });
//Testing routes
// Route::get('/bla', function(){
  // $user = User::all();
  // foreach ($user as $u) {
  //   $u->work()->detach();
  // }
  // $user->work()->attach('5');
  // var_dump($user->work()->first()->workgroup->id);
// });
// Route::post('/for_testing_result', function(){
//   return '{"success":"Это тестовый марштур, так что на многое не расчитывай"}';
// });
// Route::get('/lol', function(){
  // $user = User::find(8);
  // var_dump($user->email);
  // var_dump($user->work()->first()->toArray());
  // $user->work()->detach(2);
  // $user->work()->attach(2);
  // var_dump($user->work->first()->toArray());
  // var_dump($user->work->first()->workgroup->toArray());
  // $works = Work::all();
  // $workgroups = Workgroup::all();
  // echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>';
  // echo "<pre>";
  // $json = [];
  // foreach ($workgroups as $workgroup) {
  //   $workgroup->work = $workgroup->work->toArray();
  //   $json[] = $workgroup->toArray();
  // }
  // print_r(json_encode($json));
  // echo "</select>";
  // foreach ($workgroups as $workgroup) {
  //   $works = $workgroup->work;
  //   echo "<select name='work'>";
  //   foreach ($works as $work) {
  //     echo '<option value="'.$work->id.'">'.$work->name.'</option>';
  //   }
  //   echo "</select>";
  // }
  // echo "</form>";
// });
//Route::get('/lol', function(){
//    Mail::send('emails.lol', ['lol'=>'lol'], function($message){
//       $message->to('umer.hurramov@gmail.com')->subject('Тест mail.isogram.org');
//    });
//});
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

Route::group(['before'=>'adminauth'], function(){
   Route::get('/admin/users', 'UsersController@show_users');
   Route::get('/admin/users/{id}/forms', 'DeliveryFormsController@show_user_forms');
   Route::get('/admin/users/{user_id}/forms/{form_id}', 'DeliveryFormsController@show_user_form');
   Route::post('/admin/users/{user_id}/forms/{form_id}', 'DeliveryFormsController@update_user_form');
   Route::get('/admin/users/{user_id}/forms/{form_id}/print', 'DeliveryFormsController@printForm');
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
});
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
