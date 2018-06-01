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
