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

Route::get('/','EmpleadoController@index');

Auth::routes();
Route::resource('escritorio', 'EscritorioController');

Route::get('/home', 'EmpleadoController@index')->name('home');
Route::resource('empleados','EmpleadoController');
Route::resource('condiciones','CondicionesController');
Route::resource('ausencias','AusenciaController');
Route::resource('tipo','TipoAusenciaController');
Route::resource('vacaciones','VacacionesController');

Route::get('/prueba',function () {
    return view('prueba');
});


