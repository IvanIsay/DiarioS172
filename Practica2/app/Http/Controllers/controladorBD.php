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
        //
    }


    public function create()
    {
        return view('Registrar');
    }


    public function store(validadorDiario $request)
    {
        DB::table('tb_recuerdos')->insert([]);
    }


    public function show($id)
    {
        //
    }

 
    public function edit($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
