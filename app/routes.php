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
    'as' => 'products',
    'uses' => 'HomeController@products',
]);
Route::any('category/{category}', [
    'as' => 'category',
    'uses' => 'HomeController@products',
]);

// Confide routes
Route::get( 'user/create',                 'UserController@create');
Route::get( 'user/login',                  'UserController@login');
Route::get( 'user/confirm/{code}',         'UserController@confirm');                   # confirm account with code
Route::get( 'user/forgot_password',        'UserController@forgot_password');
Route::get( 'user/reset_password/{token}', 'UserController@reset_password');

//CSRF protection in forms
Route::group(['before' => 'csrf'], function()
{
    Route::post('user/store',                  'UserController@store');                 # store new user
    Route::post('user/login',                  'UserController@do_login');              # take 'post' with credentials
    Route::post('user/forgot_password',        'UserController@do_forgot_password');
    Route::post('user/reset_password',         'UserController@do_reset_password');

    Route::post('user/update', [
        'before' => 'auth',
        'uses' => 'UserController@update',                                              # update existing user
    ]);
});

Route::get( 'user', [                                                                   # profile page
    'before' => 'auth',
    'uses' => 'UserController@profile',
]);
Route::get( 'user/settings', [
    'before' => 'auth',
    'uses' => 'UserController@settings',
]);
Route::get( 'user/portfolio', [
    'before' => 'auth',
    'uses' => 'UserController@portfolio',
]);

Route::get('user/logout', [         // relocated to Administrator config
    'as' => 'logout',
    'uses' => 'UserController@logout'
]);