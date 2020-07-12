<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//rutas del API
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API de notas
Route::get('notas','NotasController@listar_notas' )->name('notas');
Route::post('agregar_nota','NotasController@agregar_nota' )->name('agregar');
Route::get('buscar_nota/{id}','NotasController@buscar_nota' )->name('buscar');
Route::delete('eliminar_nota/{id}','NotasController@eliminar_nota' )->name('eliminar');
Route::put('editar_nota','NotasController@editar_nota' )->name('editar');
