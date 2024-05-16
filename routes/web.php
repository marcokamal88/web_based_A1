<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


Route::get('/{lang}', 'App\Http\Controllers\UserController@create')->name("/");

Route::post('/store', 'App\Http\Controllers\UserController@store');