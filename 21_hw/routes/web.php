<?php

use Illuminate\Support\Facades\Route;


Route::post('login', 'AuthController@login');
Route::post('register', 'AuthController@register');

Route::group(['middleware' => 'auth.jwt'], function () {
    Route::resource('todos', 'TodoController');
});