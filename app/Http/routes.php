<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
Route::get('user/order', 'UserController@order');
Route::post('user/order', 'UserController@add');
Route::get('admin', 'UserController@index');
Route::get('admin/banned/{id}', 'UserController@banned');
Route::get('admin/actived/{id}', 'UserController@actived');
Route::get('admin/update/{id}', 'UserController@update');
Route::post('admin/update/{id}', 'UserController@save');

Route::get('admin/random/{time}', 'UserController@random');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

