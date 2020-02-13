<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/administrador', 'HomeController@administrador');
Route::get('/tecnico', 'HomeController@tecnico');
Route::get('/secretaria', 'HomeController@secretaria');
Route::get('/cliente', 'HomeController@cliente');




//Vistas zea



