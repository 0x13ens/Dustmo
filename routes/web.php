<?php

Route::resource('sensors', 'SensorController');
Route::get('sensors/sensors', 'SensorController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
