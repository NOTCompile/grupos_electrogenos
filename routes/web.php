<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/users/administrador', 'AdministradorController@administrador')->name('administrador');
Route::get('/users/administrador/productos', 'AdministradorController@administrador_producto')->name('administrador_producto');
Route::get('/users/administrador/productos/{id?}', 'AdministradorController@producto_detalle')->name('producto_detalle');
Route::get('/users/administrador/productos_agregar', 'AdministradorController@producto_agregar')->name('producto_agregar');
Route::post('/users/administrador/productos_crear', 'AdministradorController@producto_agregar')->name('producto_agregar');



Route::get('/users/tecnico', 'TecnicoController@tecnico');


Route::get('/users/secretaria', 'SecretariaController@secretaria');


Route::get('/users/cliente', 'ClienteController@cliente');




