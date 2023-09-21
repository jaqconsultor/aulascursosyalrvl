<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Detalles_presupuesto_plantillaController extends Controller
{
public $tabla = "detalles_presupuesto_plantilla";
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
[ 'cod_inventario'  => $request->cod_inventario ,'consecutivo'  => $request->consecutivo ,'tipo_articulo'  => $request->tipo_articulo ,'nombre'  => $request->nombre ,'precio'  => $request->precio ,'descuento'  => $request->descuento ,'cantidad'  => $request->cantidad ,'fecha_doc'  => $request->fecha_doc ,'tipo_documento'  => $request->tipo_documento ,'total_articulo'  => $request->total_articulo  ] 
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
[ 'cod_inventario'  => $request->cod_inventario ,'consecutivo'  => $request->consecutivo ,'tipo_articulo'  => $request->tipo_articulo ,'nombre'  => $request->nombre ,'precio'  => $request->precio ,'descuento'  => $request->descuento ,'cantidad'  => $request->cantidad ,'fecha_doc'  => $request->fecha_doc ,'tipo_documento'  => $request->tipo_documento ,'total_articulo'  => $request->total_articulo  ] 
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

