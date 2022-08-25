<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeladeriaController extends Controller
{
    public function totalHelado($opcion){
        $topping = ' ';
        $precioTopping = 0;
        $valorHelado = 3000;
        $totalPago = 0;

        if($opcion == 1){
            $topping = 'chocolate';
            $precioTopping = 500;
        }
        else if($opcion ==2){
            $topping = 'brownie';
            $precioTopping = 1000;
        }
        else if($opcion ==3){
            $topping = 'delicatessen';
            $precioTopping = 1500;
        }
        else{
            return 'Opción no válida';
        }
        $totalPago = $precioTopping + $valorHelado;
        return 'El topping seleccionado es : ' . $topping . ' y el total a pagar es; '. $totalPago;

    }
}
