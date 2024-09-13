<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sumaTest(){
        $variable1=10;
        $variable2=20;
        $suma=$variable1+$variable2;
        return "La suma a traves de un  controlador y funcion es $suma";
    }
}
