<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio1Controller extends Controller
{
    public function verformulario1(){
        return view('ejercicio1.ejercicio1');
    }

    public function resultado1(Request $request){

        $nota1 = $request->nota1;
        $nota2 = $request->nota2;
        $nota3 = $request->nota3;
        $practica = $request->practica;
        $final = $request->final;

        $parciales = ($nota1 + $nota2 + $nota3)/3;
        $resultado1 = $parciales*0.5;
        $resultado2 = $practica * 0.3;
        $resultado3 = $final * 0.2;

        $notafinal = $resultado1 + $resultado2 + $resultado3;
        
        #$L_porciento = $resultado1;

        

        return view('ejercicio1.resultado1', compact('notafinal'));

    }
}
