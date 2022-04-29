<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class practica2Controller extends Controller
{
    public function practica2(){
        return view('practica2.practica2');
    }

    public function resultado_pr2( Request $request){
        $numero1 = $request->numero1;

        $i=0;
        $factorial=1;

        if ($numero1 <20){
        while ($i < $numero1) {
            $i = $i+1;
            $factorial = $factorial * $i;
        }
        echo $numero1;
        
        
    }else{
        echo "numero no valido";
    }

    return view('practica2.resultado_pr2', compact('factorial'));
 }
}
