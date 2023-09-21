<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrthoreportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function opciones()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='orthoreport.ortho-report-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
