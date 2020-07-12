<?php

use Illuminate\Support\Facades\Route;

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


// Desde aqui
// Comentarios Strivino
// Se controlan todas las rutas de mi sitio web (esto es como los componentes-vistas)
// El metodo retorna las vistas que hay en la carpeta de ../resources/views
// Laravel ya sabe a que vista se refiere solo con el nombre

Route::get('/', function () {
    return view('welcome');
});

//Ejemplo
Route::get('bienvenido', function () {
    return 'Hola !';
});

//Parámetros en ruta

//ejemplo con parámetro obligatorio
Route::get('p_obligatorio/{numero}', function ($numero) {
    return 'Hola ! '. $numero;
});

//ejemplo con parámetro no obligatorio
Route::get('p_no_obligatorio/{numero?}', function ($numero='') {
    return 'Hola ! '. $numero;
});

//ejemplo con condiciones

Route::get('numero_obligatorio/{numero?}', function ($numero='') {
    return 'Hola ! '. $numero;
})->where('numero','[0-9]+');

//para acortar rutas
Route::view('/prueba', 'prueba', ['prueba_n'=>24]);
