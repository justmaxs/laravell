<?php

use Illuminate\Support\Facades\Route;

/*
*/

Route::get('/', 'App\Http\Controllers\MainController@home')->name('home');

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/contacts', 'App\Http\Controllers\MainController@contacts');

Route::get('/login', 'App\Http\Controllers\MainController@login');

Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');

Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');


