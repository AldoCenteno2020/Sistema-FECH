<?php

namespace App\Controllers;
use App\Models\pruebaModel;


class PruebaController extends BaseController
{
    public function prueba()
    {        
        $aux= new pruebaModel();
        $datos['rol']=$aux->obtener();
        return view('prueba',$datos);                   
    }
}
