<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Facturas_compras_detalleController extends Controller
{
public $tabla = "facturas_compras_detalle";
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
[ 'id_registro'  => $request->id_registro ,'id_fac_prov'  => $request->id_fac_prov ,'des_concepto'  => $request->des_concepto ,'cantidad'  => $request->cantidad ,'monto'  => $request->monto ,'monto_total'  => $request->monto_total ,'id_factura_compra'  => $request->id_factura_compra  ] 
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
[ 'id_registro'  => $request->id_registro ,'id_fac_prov'  => $request->id_fac_prov ,'des_concepto'  => $request->des_concepto ,'cantidad'  => $request->cantidad ,'monto'  => $request->monto ,'monto_total'  => $request->monto_total ,'id_factura_compra'  => $request->id_factura_compra  ] 
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

