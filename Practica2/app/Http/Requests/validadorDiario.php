<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorDiario extends FormRequest
{
 
    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return [
            'txtTitulo'=>'required',
            'txtRecuerdo'=>'required' 
        ];
    }





}
