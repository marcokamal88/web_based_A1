<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\UserController@create');

Route::post('/store', 'App\Http\Controllers\UserController@store');
