<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Practica1_Controller extends Controller
{
    public function verformulariopractica1(){
        return view('Practica1.practica');
    }

    public function resultado_practica1(Request $request){
        //le asigno a la variable numero1 a traves de request lo del input numero1
        $numero1 = $request->numero1;
        return view('Practica1.resultado_pr1', compact('numero1'));
    }
}

 