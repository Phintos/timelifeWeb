<?php

Auth::routes();

Route::view('/', 'welcome');

Route::view('/iuWwJCX7AG', 'pop');

Route::get('/home', 'AdminController@admin')->middleware('is_admin')->name('admin');

