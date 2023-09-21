<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GraficosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function vergrafico1()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='graficos.modulo-graficos-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
