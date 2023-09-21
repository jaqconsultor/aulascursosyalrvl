<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function verreporte1()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='reportes.modulo-reporte-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
