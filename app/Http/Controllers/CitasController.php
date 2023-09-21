<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function vercitas()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='citas.modulo-citas-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
