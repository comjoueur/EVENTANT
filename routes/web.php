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
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

/*****EVENTOS****/
Route::get('crearEvento','EventoController@CrearEvento');
Route::post('crearEvento','EventoController@store')->name('CrearEventostore');

Route::get('modificarEvento','ModificarEventoController@ModificarEvento');
Route::post('ModificarEventostore','ModificarEventoController2@store')->name('ModificarEventostore');
Route::post('ModificarEventostore2','ModificarEventoController2@saving')->name('ModificarEventostore2');

Route::get('adaptarEvento','AdaptarEventoController@AdaptarEvento');
Route::post('AdaptarEventostore','AdaptarEventoController2@store')->name('AdaptarEventostore');
Route::post('AdaptarEventostore2','AdaptarEventoController2@saving')->name('AdaptarEventostore2');

/******PERSONAL******/
Route::get('agregarPersonal','AgregarPersonalController@index');
Route::post('agregarPersonal','AgregarPersonalController@store')->name('AgregarPersonalstore');

Route::get('modificarPersonal','ModificarPersonalController@index');
Route::post('modificarPersonalstore','ModificarPersonalController2@store')->name('ModificarPersonalstore');
Route::post('modificarPersonalstore2','ModificarPersonalController2@saving')->name('ModificarPersonalstore2');

Route::get('eliminarPersonal', 'EliminarPersonalController@index');
Route::post('eliminarPersonalstore','EliminarPersonalController@store')->name('EliminarPersonalstore');



//Ambientes
Route::get('crearAmbiente', function () {
    return view('page.crearAmbiente');
});
Route::get('modificarAmbiente', function () {
    return view('page.modificarAmbiente');
});
Route::get('adaptarAmbiente', function () {
    return view('page.adaptarAmbiente');
});
//Actividades
Route::get('crearActividades', function () {
    return view('page.crearActividades');
});
Route::get('modificarActividades', function () {
    return view('page.modificarActividades');
});
Route::get('eliminarActividades', function () {
    return view('page.eliminarActividades');
});
//Materiales
Route::get('agregarMateriales', function () {
    return view('page.agregarMateriales');
});
Route::get('modificarMateriales', function () {
    return view('page.modificarMateriales');
});
Route::get('eliminarMateriales', function () {
    return view('page.eliminarMateriales');
});

//Paquetes
Route::get('crearPaquete', function () {
    return view('page.crearPaquete');
});
Route::get('modificarPaquete', function () {
    return view('page.modificarPaquete');
});
Route::get('eliminarPaquete', function () {
    return view('page.eliminarPaquete');
});

//Reportes
Route::get('reporteMateriales', function () {
    return view('page.reporteMateriales');
});
Route::get('reporteAsistencia', function () {
    return view('page.reporteAsistencia');
});
Route::get('cantidadInscritos', function () {
    return view('page.cantidadInscritos');
});
Route::get('certificados', function () {
    return view('page.certificados');
});

