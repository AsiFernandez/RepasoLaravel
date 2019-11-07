<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('blog/{id}', function ($id) {
    return view('blog', ['identificador' => $id ]) ;
});

Route::pattern('id', '[0-9]+');
Route::pattern('nombre', '[a-zA-Z]+');

Route::get('blog2/{id}/{nombre}', function ($id, $nombre) {
    return view('blog2', ['identificador2' => $id, 'nombre' => $nombre ]) ;
});

Route::get('saludo', 'SaludoController@saludo')->name('saludo');
Route::get('saludoConNombre/{nombre}', 'SaludoController@saludoConNombre')->name('saludoConNombre');
Route::get('saludoConNombre/{nombre}/{color?}', 'SaludoController@saludoNombreColor')->name('saludoNombreColor');


Route::get('formulario1', 'FormController@formulario1')->name('formulario1');
Route::get('formularioSaludo/post', 'FormController@formularioSaludo')->name('formularioSaludo');


Route::get('storeFormContacto', 'FormController@storeFormContacto')->name('storeFormContacto');
Route::get('validateform3', 'FormController@validateform3')->name('validateform3');

