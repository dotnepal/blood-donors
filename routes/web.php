<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'SiteController@home');
Route::get('/signup','SiteController@signup')->name('signup');
Route::get('/login','SiteController@login')->name('login');
Route::post('/login','SiteController@login_do')->name('login.do');
Route::post('/signup','SiteController@signup_do')->name('signup.do');
