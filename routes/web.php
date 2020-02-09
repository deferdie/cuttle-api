<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/exception', 'ExceptionController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
