<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('auth.login');
});*/

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('register/verify/{token}', 'Auth\RegisterController@verify'); 

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

/*SOCIALITE AUTHENTICATION ROUTE SECTION*/
Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');


/*PINTEREST AUTHENTICATION ROUTE SECTION*/
Route::get('custom-auth/{provider}', 'Auth\LoginController@redirectToCustomProvider');
Route::get('custom-auth/{provider}/callback', 'Auth\LoginController@handleCustomProviderCallback');

/*USER MANAGEMENT*/
Route::group(['middleware' => ['role:admin|user']], function()
{
	/*PROFILE*/
	Route::get('user/profile','UserController@profile');
	Route::post('user/profile','UserController@postProfile');

	Route::resource('user','UserController');
	Route::resource('role','RoleController');
	Route::resource('permission','PermissionController');
	Route::get('role/{id}/permission', 'RoleController@permissions');
	Route::post('role/{id}/permission', 'RoleController@permissionsStore');

});

/*ADMIN ROUTE*/
Route::group(['middleware' => ['role:admin']], function(){
	Route::resource('setting','SettingController');
});