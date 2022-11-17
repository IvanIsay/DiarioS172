<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorBD;



//Rutas para controlador Resource

//Create
Route::get('recuerdo/create', [controladorBD::class,'create'])->name('recuerdo.create');










//rutas individuales para controlador

Route::get('/', [controladorVistas::class,'showWelcome']);

Route::get('Home', [controladorVistas::class,'showHome'])->name('apodoHome');



Route::get('Recuerdo', [controladorVistas::class,'showRecuerdos'])->name('apodoRec');


// Ruta para envio post

Route::post('GuardarRecuerdo', [controladorVistas::class,'procesarRecuerdo'])->name('SaveMem');





