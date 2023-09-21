<?php

namespace App\Http\Controllers;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use Illuminate\Support\Facades\DB;

class SysMigracion1Controller extends Controller
{

    public function __construct()
    {

    }

    // Funcion para Cargar Data Incial
    public function updata()
    {
        return view('up');
    }

    // Funcion para Borrar Data
    public function downdata()
    {
        return view('down');
    }


    // Funcion para Corrergir Data
    public function corregirdata()
    {
        return view('corregirdata');
    }

}