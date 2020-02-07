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


//vistas
Route::get('prestamos', function () {
    return view('prestamo.prestamos');
});

Route::get('admin',function () {
	return view('layouts.admin');
});

Route::get('prestamista',function () {
	return view('prestamo/prestamistas');
});

Route::get('abono',function () {
	return view('abono/abonos');
});

Route::get('empleado',function () {
	return view('empresa/empleado');
});

Route::get('periodo',function () {
	return view('periodo/periodos');
});





//Apis

Route::apiResource('apiP','ApiPrestamosController');

Route::apiResource('apiUsu','ApiPrestamistasController');

Route::apiResource('apiAbo','ApiAbonosController');

Route::apiResource('apiEm','ApiEmpleadosController');

Route::apiResource('apiPeri','ApiPeriodosController');