<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministracionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function veradministracion1()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='administracion.modulo-administracion-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
