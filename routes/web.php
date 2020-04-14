<?php

Route::get('/', function () {
    return view('welcome');
});

Route::post('/exception', 'ExceptionController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('applications', 'ApplicationController@index')->name('applications.index');
Route::get('applications/create', 'ApplicationController@create')->name('applications.create');
Route::get('applications/{application}', 'ApplicationController@show')->name('applications.show');
Route::post('applications', 'ApplicationController@store')->name('applications.store');
Route::put('applications/{application}', 'ApplicationController@update')->name('applications.update');
