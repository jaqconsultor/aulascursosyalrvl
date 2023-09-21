<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Ultra_mamaController extends Controller
{
public $tabla = "ultra_mama";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'referido'  => $request->referido ,'menarquia'  => $request->menarquia ,'para'  => $request->para ,'quirurgicos'  => $request->quirurgicos ,'hormonas'  => $request->hormonas ,'tranductor'  => $request->tranductor ,'mama_derecha'  => $request->mama_derecha ,'axila_derecha'  => $request->axila_derecha ,'mama_izquierda'  => $request->mama_izquierda ,'axila_izquierda'  => $request->axila_izquierda ,'conclusion'  => $request->conclusion ,'puro_texto'  => $request->puro_texto  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'referido'  => $request->referido ,'menarquia'  => $request->menarquia ,'para'  => $request->para ,'quirurgicos'  => $request->quirurgicos ,'hormonas'  => $request->hormonas ,'tranductor'  => $request->tranductor ,'mama_derecha'  => $request->mama_derecha ,'axila_derecha'  => $request->axila_derecha ,'mama_izquierda'  => $request->mama_izquierda ,'axila_izquierda'  => $request->axila_izquierda ,'conclusion'  => $request->conclusion ,'puro_texto'  => $request->puro_texto  ] 
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

