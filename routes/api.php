<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//list mood, comments ecc..

Route::get('media', 'MediaController@index');

Route::get('user', 'UserController@index');

//list single mood, comments ecc..

Route::get('media/{id}', 'MediaController@show');

Route::get('user/{id}', 'UserController@show');

Route::get('calendar/{id}', 'CalendarController@show');

//create new media...

Route::post('media', 'MediaController@store');

Route::post('user', 'UserController@store');

// update media...
Route::put('media', 'MediaController@store');
Route::put('user', 'UserController@store');

//destroy media...
Route::delete('media/{id}', 'MediaController@destroy');
Route::delete('user/{id}', 'UserController@destroy');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
