<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejercicio2Controller extends Controller
{
    public function verformulario2(){
        return view('ejercicio2.ejercicio2');
    }

    public function resultado_ejercicio2(Request $request){

        $nota1= $request->nota1;
    }
}
