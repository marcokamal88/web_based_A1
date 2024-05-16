<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\UserController@create')->name('/');

Route::post('/store', 'App\Http\Controllers\UserController@store');
