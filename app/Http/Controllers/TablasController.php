<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TablasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function verlistpacientes()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='tablas.crud-pacientes-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    public function verlistusuarios()
    {
        $view ='tablas.crud-pacientes-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
    }

}
