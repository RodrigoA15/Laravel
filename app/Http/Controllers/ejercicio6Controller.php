<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio6Controller extends Controller
{
    public function formulario6 (){
        return view('ejercicio6.ejercicio6');
    }

    public function resultado6(Request $request){

        $sueldo= $request->sueldo;
        $categoria = $request->categoria;

        if ($categoria == "1") {
            $resultado = $sueldo/100*120;
        }

        elseif ($categoria == "2") {
            $resultado = $sueldo/100*115;
        }

        elseif ($categoria== "3") {
            $resultado = $sueldo/100*110;
        }

        elseif ($categoria == "4") {
            $resultado = $sueldo/100*107;
        }

        elseif ($categoria >4) {
            echo "Digite un numero de 1 a 4";
        }


        return view('ejercicio6.resultado6', compact('resultado'));
    }
}
