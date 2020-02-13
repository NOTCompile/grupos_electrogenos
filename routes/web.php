<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/users/administrador', 'PagesController@administrador')->name('administrador');
Route::get('/users/administrador/productos', 'PagesController@administrador_producto')->name('administrador_producto');
Route::get('/users/administrador/productos/{id?}', 'PagesController@producto_detalle')->name('producto_detalle');
Route::get('/users/administrador/productos_agregar', 'PagesController@producto_agregar')->name('producto_agregar');



Route::get('/users/tecnico', 'PagesController@tecnico');

Route::get('/users/secretaria', 'PagesController@secretaria');

Route::get('/users/cliente', 'PagesController@cliente');




