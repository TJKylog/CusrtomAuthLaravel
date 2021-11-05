<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index')->name('index');
Route::post('/login', 'HomeController@login')->name('login');

Route::group( ['middleware' => ['auth'] ] , function () {
    Route::get('/home', 'HomeController@home')->name('home');
});