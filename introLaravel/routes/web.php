<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\clienteController;


//controlador vistas

Route::get('/', [controladorVistas::class, 'home'])->name('rutainicio');


Route::view('/component','componentes')->name('rutacomponentes'); 

Route::post('/enviarCliente', [controladorVistas::class, 'procesarCliente'])->name('rutaEnviar');


//controlador cliente
Route::get('/cliente/create', [clienteController::class,'create'])->name('rutaform');

Route::post('/cliente',[clienteController::class,'store'])->name('enviaCliente');

Route::get('/cliente', [clienteController::class, 'index'])->name('rutaclientes');








//ruta de tipo GET
/* Route::get('/', function () {
    return view('welcome');
}); */

/* //ruta de tipo VIEW
Route::view('/','inicio')->name('rutainicio');
Route::view('/form','formulario')->name('rutaform');
Route::view('/clientes','clientes')->name('rutaclientes');
*/
