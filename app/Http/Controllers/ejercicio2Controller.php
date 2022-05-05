<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio2Controller extends Controller
{
    public function verformulario2()
    {
        return view('ejercicio2.ejercicio2');
    }

    public function resultado_ejer2(request $request)
    {
        $nombre = $request->nombre;
        $horas = $request->horas;
        $valorhora = $request->valorhora;
        $bonificacion = $request->bonificacion;
        $Aux = $request->Aux;
        $credito = $request->credito;

        $salario = $horas * $valorhora + $bonificacion + $Aux + $credito;
        if ($salario > 4000000) {
            echo "Severo salario";
        }

        return view('ejercicio2.resultado_ejer2', compact('nombre', 'horas', 'valorhora', 'bonificacion', 'Aux', 'credito', 'salario'));
    }
}
