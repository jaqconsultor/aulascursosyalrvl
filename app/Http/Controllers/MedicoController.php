<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function opciones()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='medico.modulo-medico-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
