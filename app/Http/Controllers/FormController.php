<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
      
    function formulario1(){
        return view('formulario1');
    }

    function formularioSaludo(Request $request){

        $json = File::get(base_path('database/data/saludos.json'));

        return view('mostrarDatos',['nombre'=>$nombre]);
    }
    
}
