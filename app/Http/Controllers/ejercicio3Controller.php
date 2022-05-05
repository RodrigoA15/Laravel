<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio3Controller extends Controller
{
    public function verformulario3(){
    return view('ejercicio3.ejercicio3');
    }

    public function resultado3(Request $request){

        $x= $request->numero;

        $potencia= pow($x,2);
        $resultado = 3*$potencia + 7*$x-15;

        return view('ejercicio3.resultado3', compact('resultado'));
    }

}
