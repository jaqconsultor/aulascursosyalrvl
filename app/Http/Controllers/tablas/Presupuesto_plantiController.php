<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Presupuesto_plantiController extends Controller
{
public $tabla = "presupuesto_planti";
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
[ 'consecutivo'  => $request->consecutivo ,'tipo_precio'  => $request->tipo_precio ,'total_costo'  => $request->total_costo ,'total_final'  => $request->total_final ,'notas'  => $request->notas ,'tipo_doc'  => $request->tipo_doc ,'nom_presupuesto'  => $request->nom_presupuesto  ] 
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
[ 'consecutivo'  => $request->consecutivo ,'tipo_precio'  => $request->tipo_precio ,'total_costo'  => $request->total_costo ,'total_final'  => $request->total_final ,'notas'  => $request->notas ,'tipo_doc'  => $request->tipo_doc ,'nom_presupuesto'  => $request->nom_presupuesto  ] 
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

