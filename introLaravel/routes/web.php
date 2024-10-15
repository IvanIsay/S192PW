<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;


Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');

Route::get('/form', [controladorVistas::class, 'formulario'])->name('rutaform');

Route::get('/clientes', [controladorVistas::class, 'consulta'])->name('rutaclientes');

Route::view('/component','componentes')->name('rutacomponentes'); 

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');











//ruta de tipo GET
/* Route::get('/', function () {
    return view('welcome');
}); */

/* //ruta de tipo VIEW
Route::view('/','inicio')->name('rutainicio');
Route::view('/form','formulario')->name('rutaform');
Route::view('/clientes','clientes')->name('rutaclientes');
*/
