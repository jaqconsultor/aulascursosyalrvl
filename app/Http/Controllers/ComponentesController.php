<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function buscarmedicos()
    {
        return view('layouts.componentes.buscarmedicos');
    }

    public function verscroll()
    {
        return view('layouts.componentes.verscroll');
    }

    public function verpacientes()
    {
        return view('layouts.componentes.verpacientes');
    }

    public function vercarusel()
    {
        return view('layouts.componentes.vercarusel');
    }

    public function set_language($language){        
        if(array_key_exists($language, config('languages'))){            
           session()->put('applocale', $language);        
        }        
        return back();     
     }

     public function verreporte()
     {
         return view('layouts.componentes.verreporte');
     }
 
     public function verreporte1()
     {
         return view('layouts.componentes.verreporte1');
     }
 
     public function subirarchivo()
     {
         return view('layouts.componentes.subirarchivo');
     }


}
