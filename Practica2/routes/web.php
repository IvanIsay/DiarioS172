<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorVistas;
use App\Http\Controllers\controladorBD;



//Rutas para controlador Resource

//Create
Route::get('recuerdo/create', [controladorBD::class,'create'])->name('recuerdo.create');

//Store
Route::post('recuerdo', [controladorBD::class,'store'])->name('recuerdo.store');

//Index
Route::get('recuerdo', [controladorBD::class,'index'])->name('recuerdo.index');

//Edit
Route::get('recuerdo/{id}/edit', [controladorBD::class,'edit'])->name('recuerdo.edit');

//Update
Route::put('recuerdo/{id}', [controladorBD::class,'update'])->name('recuerdo.update');

//Show
Route::get('recuerdo/{id}/show', [controladorBD::class,'show'])->name('recuerdo.show');





//rutas individuales para controlador

Route::get('/', [controladorVistas::class,'showWelcome']);

Route::get('Home', [controladorVistas::class,'showHome'])->name('apodoHome');



Route::get('Recuerdo', [controladorVistas::class,'showRecuerdos'])->name('apodoRec');


// Ruta para envio post







