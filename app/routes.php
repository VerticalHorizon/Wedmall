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

Route::get('/', function()
{
	return View::make('user.register');
});

Route::get('register', [
  'uses' => 'RegisterController@index',
  'as' => 'register.index'
]);

Route::get('store', [
  'uses' => 'RegisterController@store',
  'as' => 'register.store'
]);