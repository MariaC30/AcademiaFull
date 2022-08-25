<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorPrecios extends Controller
{
    public function totalDescuento($valor){
        $precio = '';
        $descuento1 = '0.02';
        $descuento2 = '0.04';
        $descuento3 = '0.05';


        if ($valor <=100000){
            $precio = 5000;
            $descuento1 = 0.02
        }
        else if($valor = 100000 < 150000 ){
            $precio = '5000';
            $descuento2 = 0.04;

    }
}
