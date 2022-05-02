<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio5Controller extends Controller
{
    public function formulario5(){
        return view('ejercicio5.ejercicio5');
    }

    public function resultado5(request $request){

        $numero1= $request->numero1;
        $operacion= $request->operacion;
        $numero2= $request->numero2;

        if ($operacion== "+") {
            
            $resultado1= $numero1 + $numero2;
        }

        elseif ($operacion == "-") {

            $resultado1 = $numero1 - $numero2;
        }

        elseif ($operacion == "*") {
            
            $resultado1 = $numero1 * $numero2;
        }

        elseif ($operacion == "/") {
            
            $resultado1= $numero1 / $numero2;
        }

    elseif ($operacion== "%") {
        
        $resultado1= $numero1 % $numero2;
    }

        return view('ejercicio5.resultado5', compact("resultado1"));
    }
}
  