<?php

use Illuminate\Http\Request;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('media', 'MediaController@index')->middleware('auth:api');
Route::get('user', 'UserController@index')->middleware('auth:api');

Route::get('media/{id}', 'MediaController@show');
Route::get('user/{id}', 'UserController@show');
Route::get('calendar', 'CalendarController@show');
Route::get('calendar/{user_id}', 'CalendarController@index');
Route::get('allmedia/{calendar_id}', 'MediaController@index');

//create new media
Route::post('media', 'MediaController@store');
Route::post('user', 'UserController@store');

// update media...
Route::put('media', 'MediaController@store')->middleware('auth:api');
Route::put('user', 'UserController@store')->middleware('auth:api');
Route::put('calendar/{user_id}', 'CalendarController@store');

//destroy media
Route::delete('media/{id}', 'MediaController@destroy')->middleware('auth:api');
Route::delete('user/{id}', 'UserController@destroy')->middleware('auth:api');

// Authentication Routes
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login')->middleware('auth:api');
Route::post('login', 'Auth\LoginController@login')->middleware('auth:api');
Route::post('logout', 'Auth\LoginController@logout')->name('logout')->middleware('auth:api');
Route::post('oauth/token', 'AccessTokenController@issueToken');
Route::post('calendar/{user_id}', 'CalendarController@store');


// Registration Routes
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register')->middleware('auth:api');
Route::post('register', 'Auth\RegisterController@create');

// Password Reset Routes
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
