<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Registro_empleados_ejeController extends Controller
{
public $tabla = "registro_empleados_eje";
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
[ 'nro_nomina'  => $request->nro_nomina ,'descripcion'  => $request->descripcion ,'fecha_aplicacion'  => $request->fecha_aplicacion ,'status'  => $request->status ,'tipo_nomina'  => $request->tipo_nomina ,'frecuencia_nomina'  => $request->frecuencia_nomina ,'monto_total'  => $request->monto_total  ] 
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
[ 'nro_nomina'  => $request->nro_nomina ,'descripcion'  => $request->descripcion ,'fecha_aplicacion'  => $request->fecha_aplicacion ,'status'  => $request->status ,'tipo_nomina'  => $request->tipo_nomina ,'frecuencia_nomina'  => $request->frecuencia_nomina ,'monto_total'  => $request->monto_total  ] 
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

