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
Route::resource('escritorio', 'EscritorioController@index');

Route::get('/home', 'EmpleadoController@index')->name('home');
Route::resource('empleados','EmpleadoController');
Route::resource('condiciones','CondicionesController');
Route::resource('ausencias','AusenciaController');
Route::resource('tipo','TipoAusenciaController');
Route::resource('vacaciones','VacacionesController');
Route::resource('pdf','GenerarPdfController');
Route::resource('horas','HoraExtraController');

Route::get('prueba',function () {
    return view('prueba');
});

Route::get("maternidad","ausenciasespecialescontroller@maternidad")->name("maternidad");
Route::get("addmaternidad","ausenciasespecialescontroller@agregarMaternidad")->name("addmaternidad");
Route::post("addmaternidad","ausenciasespecialescontroller@guardarMaternidad")->name("addmaternidad");

Route::get("lactancia","ausenciasespecialescontroller@lactancia")->name("lactancia");
Route::get("addlactancia","ausenciasespecialescontroller@agregarLactancia")->name("addlactancia");
Route::post("addlactancia","ausenciasespecialescontroller@guardarLactancia")->name("addlactancia");

