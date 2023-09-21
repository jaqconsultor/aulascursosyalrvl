<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsultaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function verconsulta()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='consulta.modulo-consulta-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
