<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Recipe_grupoController extends Controller
{
public $tabla = "recipe_grupo";
    public $registro = null;

     public function __construct() { 
        
     }
     
     public function index()
     {
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     public function create()
     {
         return view( 'crud' . $this->tabla.'.create');
     }
 
     public function store(Request $request)
     {
        DB::table($this->tabla)->updateOrInsert(
[ 'codigo'  => $request->codigo ,'tratamiento'  => $request->tratamiento  ] 
        );
         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function show($id)
     {
        $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
        $registros = $this->registros;
        return view('crud' . $this->tabla . '.show',compact('registros'));
     }
 
     public function edit($id)
     {
         $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         $registros = $this->registros;
         return view('crud' .$this->tabla .'.edit',compact('registros'));
     }
 
     public function update(Request $request, $id)
     {
        
        $affected = DB::table($this->tabla)->where('id', $id)->update(
[ 'codigo'  => $request->codigo ,'tratamiento'  => $request->tratamiento  ] 
        );

         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function destroy($id)
     {
        $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     
}

