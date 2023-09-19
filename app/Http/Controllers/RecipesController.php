<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function opciones()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='recipes.modulo-de-recipes-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
