<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;   
class FormController extends Controller
{
      
    function formulario1(){
        return view('formulario1');
    }

    function formularioSaludo(Request $request){
        return view('mostrarDatos');
    }

    public function storeFormContacto (request $request){
        return view('formularioContacto');
    }

    function validateform3 (request $request){
        $validatedData = $request->validate([
            'nombre' => 'required|min:2|max:15',
            'apellido' => 'required|min:2|max:20',
            'dni' => '',
            'email' => 'email',
            'telefono' => 'regex:/^[679][0-9]{8}$/'
        ]);

        return view('saludoValidado')->with(
            'nombre',$request->input('nombre'))->with(
            'apellido',$request->input('apellido'))->with(
            'dni',$request->input('dni'))->with(
            'email',$request->input('email'))->with(
            'telefono',$request->input('telefono'));
    }
    
}
