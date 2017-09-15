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

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/menus', 'MenuController@index');
Route::get('/menus/{id}', 'MenuController@show');
Route::resource('/menus', 'MenuController');
//Route::resource('photo', 'PhotoController');


Route::get('/addProduct/{productId}', 'CartController@addItem');
Route::get('/removeItem/{productId}', 'CartController@removeItem');
Route::get('/cart', 'CartController@showCart');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Admin routes
Route::get('/admin_register', 'AdminAuth\RegisterController@showRegistrationForm');
Route::post('/admin_register', 'AdminAuth\RegisterController@register');
Route::get('/admin_dashboard', function(){
	return view('admin.dashboard');
});