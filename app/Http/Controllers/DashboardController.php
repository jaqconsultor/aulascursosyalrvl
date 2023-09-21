<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function verdashboard1()
    {
      // return view('layouts.componentes.list-pacientes');
        $view ='dashboard.modulo-dashboard-component';

       return view('layouts.ver-template', [
           'view' => $view
         ]);

    }

    
}
