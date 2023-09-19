<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function verformulario()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='citas.modulo-citas-component';

       return view('layouts.ver-formulario', [
           'view' => $view
         ]);

    }

    
}
