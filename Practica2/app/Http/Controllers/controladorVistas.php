<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;

class controladorVistas extends Controller
{

    public function procesarRecuerdo(validadorDiario $req){
        
        return redirect('Registar')->with('confirmacion','Llego correcto');
 
    }






    public function showWelcome(){
        return view('welcome');
    }
   

    public function showHome(){
        return view('Home');
    }

    public function showIngresar(){
        return view('Registrar');
    }

    public function showRecuerdos(){
        return view('Recuerdo');
    }



}
