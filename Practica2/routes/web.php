<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;



//rutas individuales para controlador

Route::get('/', [controladorVistas::class,'showWelcome']);

Route::get('Home', [controladorVistas::class,'showHome'])->name('apodoHome');

Route::get('Registar', [controladorVistas::class,'showIngresar'])->name('apodoReg');

Route::get('Recuerdo', [controladorVistas::class,'showRecuerdos'])->name('apodoRec');


// Ruta para envio post

Route::post('GuardarRecuerdo', [controladorVistas::class,'procesarRecuerdo'])->name('SaveMem');





