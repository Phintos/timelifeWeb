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

Route::get('media', 'MediaController@index')->middleware('auth:api');

Route::get('user', 'UserController@index')->middleware('auth:api');

//list single mood, comments ecc..

Route::get('media/{id}', 'MediaController@show')->middleware('auth:api');

Route::get('user/{id}', 'UserController@show');

Route::get('calendar', 'CalendarController@show');

Route::get('calendar/{user_id}', 'CalendarController@index');

Route::get('allmedia/{calendar_id}', 'MediaController@index');

//create new media...

Route::post('media', 'MediaController@store')->middleware('auth:api');

Route::post('user', 'UserController@store')->middleware('auth:api');

// update media...
Route::put('media', 'MediaController@store')->middleware('auth:api');
Route::put('user', 'UserController@store')->middleware('auth:api');

//destroy media...
Route::delete('media/{id}', 'MediaController@destroy')->middleware('auth:api');
Route::delete('user/{id}', 'UserController@destroy')->middleware('auth:api');

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login')->middleware('auth:api');
Route::post('login', 'Auth\LoginController@login')->middleware('auth:api');
Route::post('logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth:api');
Route::post('oauth/token', 'AccessTokenController@issueToken');


// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('auth:api');
Route::post('register', 'Auth\RegisterController@register')->middleware('auth:api');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->middleware('auth:api');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->middleware('auth:api');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->middleware('auth:api');
Route::post('password/reset', 'Auth\ResetPasswordController@reset')->middleware('auth:api');
