<?php

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/administrador', 'AdministradorController@index_administrador')->name('index_administrador');

/*Administrador*/
Route::get('/users/administrador/productos', 'AdministradorController@producto_a')->name('producto_a');
Route::get('/users/administrador/productos/{id?}', 'AdministradorController@producto_detalle_a')->name('producto_detalle_a');
Route::get('/users/administrador/productos_agregar', 'AdministradorController@producto_agregar_a')->name('producto_agregar_a');
Route::post('/users/administrador/productos_crear', 'AdministradorController@producto_crear_a')->name('producto_crear_a');
Route::get('/users/administrador/productos_editar/{id?}', 'AdministradorController@producto_editar_a')->name('producto_editar_a');
Route::put('/users/administrador/productos_editar/{id?}', 'AdministradorController@producto_actualizar_a')->name('producto_actualizar_a');
Route::delete('/users/administrador/productos_eliminar/{id?}', 'AdministradorController@producto_eliminar_a')->name('producto_eliminar_a');

Route::get('/users/administrador/usuarios', 'AdministradorController@usuario_a')->name('usuario_a');
Route::get('/users/administrador/usuarios_editar/{id?}', 'AdministradorController@usuario_editar_a')->name('usuario_editar_a');
Route::put('/users/administrador/usuarios_editar/{id?}', 'AdministradorController@usuario_actualizar_a')->name('usuario_actualizar_a');
Route::delete('/users/administrador/usuarios_eliminar/{id?}', 'AdministradorController@usuario_eliminar_a')->name('usuario_eliminar_a');


Route::get('/users/administrador/imagenes', 'ImageController@inicio_imagenes_a')->name('inicio_imagenes_a');
Route::get('/users/administrador/imagenes_agregar', 'ImageController@imagenes_agregar_a')->name('imagenes_agregar_a');
Route::post('/users/administrador/imagenes_crear', 'ImageController@imagenes_crear_a')->name('imagenes_crear_a');
Route::delete('/users/administrador/imagenes_eliminar/{id}', 'ImageController@imagenes_eliminar_a')->name('imagenes_eliminar_a');



/*Tecnico*/
Route::get('/users/tecnico', 'TecnicoController@index_tecnico')->name('index_tecnico');
Route::get('/users/tecnico/productos', 'TecnicoController@producto_t')->name('producto_t');
Route::get('/users/tecnico/productos/{id?}', 'TecnicoController@producto_detalle_t')->name('producto_detalle_t');
Route::get('/users/tecnico/productos_agregar', 'TecnicoController@producto_agregar_t')->name('producto_agregar_t');
Route::post('/users/tecnico/productos_crear', 'TecnicoController@producto_crear_t')->name('producto_crear_t');
Route::delete('/users/tecnico/productos_eliminar/{id?}', 'TecnicoController@producto_eliminar_t')->name('producto_eliminar_t');

Route::get('/users/tecnico/usuarios', 'TecnicoController@usuario_t')->name('usuario_t');
Route::get('/users/tecnico/usuarios_editar/{id?}', 'TecnicoController@usuario_editar_t')->name('usuario_editar_t');
Route::put('/users/tecnico/usuarios_editar/{id?}', 'TecnicoController@usuario_actualizar_t')->name('usuario_actualizar_t');

Route::get('/users/administrador/imagenes', 'ImageController@inicio_imagenes_t')->name('inicio_imagenes_t');
Route::get('/users/administrador/imagenes_agregar', 'ImageController@imagenes_agregar_t')->name('imagenes_agregar_t');
Route::post('/users/administrador/imagenes_crear', 'ImageController@imagenes_crear_a')->name('imagenes_crear_t');
Route::delete('/users/administrador/imagenes_eliminar/{id}', 'ImageController@imagenes_eliminar_t')->name('imagenes_eliminar_t');




/*Secretaria*/
Route::get('/users/secretaria', 'SecretariaController@index_secretaria')->name('index_secretaria');
Route::get('/users/secretaria/productos', 'SecretariaController@producto_s')->name('producto_s');
Route::get('/users/secretaria/productos/{id?}', 'SecretariaController@producto_detalle_s')->name('producto_detalle_s');

Route::get('/users/secretaria/usuarios', 'SecretariaController@usuario_s')->name('usuario_s');

/*Cliente*/
Route::get('/users/cliente', 'ClienteController@index_cliente')->name('index_cliente');
Route::get('/users/cliente/productos', 'ClienteController@producto_c')->name('producto_c');
Route::get('/users/cliente/productos/{id?}', 'ClienteController@producto_detalle_c')->name('producto_detalle_c');

Route::get('/users/cliente/usuarios', 'ClienteController@usuario_c')->name('usuario_c');
Route::get('/users/cliente/usuarios_editar/{id?}', 'ClienteController@usuario_editar_c')->name('usuario_editar_c');
Route::put('/users/cliente/usuarios_editar/{id?}', 'ClienteController@usuario_actualizar_c')->name('usuario_actualizar_c');
