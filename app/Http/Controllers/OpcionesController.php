<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OpcionesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function opciones()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='desistema.modulo-del-sistema-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
