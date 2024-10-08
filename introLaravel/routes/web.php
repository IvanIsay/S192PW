<?php

use Illuminate\Support\Facades\Route;


//ruta de tipo GET
/* Route::get('/', function () {
    return view('welcome');
}); */

//ruta de tipo VIEW
Route::view('/','inicio')->name('rutainicio');
Route::view('/form','formulario')->name('rutaform');
Route::view('/clientes','clientes')->name('rutaclientes');