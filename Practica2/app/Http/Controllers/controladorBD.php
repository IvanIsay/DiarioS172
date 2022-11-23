<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorDiario;
use DB;
use Carbon\Carbon;

class controladorBD extends Controller
{

    public function index()
    {
        $ConsultaRec= DB::table('tb_recuerdos')->get();
        return view('Recuerdo',compact('ConsultaRec'));
    }


    public function create()
    {
        return view('Registrar');
    }


    public function store(validadorDiario $request)
    {
        DB::table('tb_recuerdos')->insert([
            "titulo"=> $request->input('txtTitulo'),
            "recuerdo"=> $request->input('txtRecuerdo'),
            "fecha"=> Carbon::now(),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('recuerdo/create')->with('confirmacion','abc');
    }


    public function show($id)
    {
        //
    }

 


    public function edit($id)
    {
        $consultaId= DB::table('tb_recuerdos')->where('idRecuerdo',$id)->first();
        
        return view('editar', compact('consultaId'));
    }

 
    public function update(validadorDiario $request, $id)
    {
        DB::table('tb_recuerdos')->where('idRecuerdo',$id)->update([
            "titulo"=> $request->input('txtTitulo'),
            "recuerdo"=> $request->input('txtRecuerdo'),
            "updated_at"=> Carbon::now()
        ]);

        return redirect('recuerdo')->with('Actualizar','abc');
    }





    public function destroy($id)
    {
        //
    }
}
