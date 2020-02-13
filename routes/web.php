<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/users/administrador', 'AdministradorController@administrador')->name('administrador');
Route::get('/users/administrador/productos', 'AdministradorController@administrador_producto')->name('administrador_producto');
Route::get('/users/administrador/productos/{id?}', 'AdministradorController@administrador_detalle')->name('administrador_detalle');
Route::get('/users/administrador/productos_agregar', 'AdministradorController@administrador_agregar')->name('administrador_agregar');
Route::post('/users/administrador/productos_crear', 'AdministradorController@administrador_crear')->name('administrador_crear');
Route::get('/users/administrador/productos_editar/{id?}', 'AdministradorController@administrador_editar')->name('administrador_editar');
Route::put('/users/administrador/productos_editar/{id?}', 'AdministradorController@administrador_actualizar')->name('administrador_actualizar');
Route::delete('/users/administrador/productos_eliminar/{id?}', 'AdministradorController@administrador_eliminar')->name('administrador_eliminar');



Route::get('/users/tecnico', 'TecnicoController@tecnico');
Route::get('/users/tecnico/productos', 'TecnicoController@administrador_producto')->name('tecnico_producto');
Route::get('/users/tecnico/productos/{id?}', 'TecnicoController@producto_detalle')->name('producto_detalle');
Route::get('/users/tecnico/productos_agregar', 'TecnicoController@producto_agregar')->name('producto_agregar');
Route::post('/users/tecnico/productos_crear', 'TecnicoController@producto_crear')->name('producto_crear');
Route::get('/users/tecnico/productos_editar/{id?}', 'TecnicoController@Producto_Editar')->name('producto_editar');
Route::put('/users/tecnico/productos_editar/id?}', 'TecnicoController@Producto_Actualizar')->name('producto_actualizar');
Route::delete('/users/tecnico/productos_eliminar/{id?}', 'TecnicoController@Producto_Eliminar')->name('producto_eliminar');


Route::get('/users/secretaria', 'SecretariaController@secretaria');


Route::get('/users/cliente', 'ClienteController@cliente');




