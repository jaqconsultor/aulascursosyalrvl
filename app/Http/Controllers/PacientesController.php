<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function pacientes()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='paciente.modulo-pacientes-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
