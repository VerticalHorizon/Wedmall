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

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@welcome',
]);
Route::any('products', [
    'as' => 'category',
    'uses' => 'HomeController@getByCategory',
]);
Route::any('category/{alias}', [
    'as' => 'category',
    'uses' => 'HomeController@getByCategory',
]);
Route::any('color/{alias}', [
    'as' => 'color',
    'uses' => 'HomeController@getByColor',
]);

// Confide routes
Route::get( 'user/create',                 'UserController@create');
Route::post('user',                        'UserController@store');
Route::get( 'user/login',                  'UserController@login');
Route::post('user/login',                  'UserController@do_login');
Route::get( 'user/confirm/{code}',         'UserController@confirm');
Route::get( 'user/forgot_password',        'UserController@forgot_password');
Route::post('user/forgot_password',        'UserController@do_forgot_password');
Route::get( 'user/reset_password/{token}', 'UserController@reset_password');
Route::post('user/reset_password',         'UserController@do_reset_password');

Route::get( 'user',                        'UserController@profile');
Route::get( 'user/settings',               'UserController@settings');
Route::get('user/portfolio',               'UserController@portfolio');
Route::post('user/update',                 'UserController@update');

Route::get('user/logout', [         // relocated to Administrator config
    'as' => 'logout',
    'uses' => 'UserController@logout'
]);