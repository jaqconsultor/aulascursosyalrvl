<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function asignarroles()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='tablas.crud-roles-component';

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

    public function verlistroles()
    {
      $view ='tablas.crud-roles-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
    }

}
