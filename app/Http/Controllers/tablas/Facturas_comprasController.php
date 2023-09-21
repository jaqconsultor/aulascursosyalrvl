<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Facturas_comprasController extends Controller
{
public $tabla = "facturas_compras";
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
[ 'id_factura_compra'  => $request->id_factura_compra ,'cod_prov'  => $request->cod_prov ,'id_tipo_concepto'  => $request->id_tipo_concepto ,'fecha'  => $request->fecha ,'estado'  => $request->estado ,'nro_seniat'  => $request->nro_seniat ,'nro_factura'  => $request->nro_factura ,'mto_neto'  => $request->mto_neto ,'mto_porc_iva'  => $request->mto_porc_iva ,'mto_iva'  => $request->mto_iva ,'mto_porc_ret_iva'  => $request->mto_porc_ret_iva ,'mto_ret_iva'  => $request->mto_ret_iva ,'mto_porc_ret_isrl'  => $request->mto_porc_ret_isrl ,'mto_ret_isrl'  => $request->mto_ret_isrl ,'mto_total_general'  => $request->mto_total_general ,'nro_cxp'  => $request->nro_cxp ,'mto_total'  => $request->mto_total  ] 
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
[ 'id_factura_compra'  => $request->id_factura_compra ,'cod_prov'  => $request->cod_prov ,'id_tipo_concepto'  => $request->id_tipo_concepto ,'fecha'  => $request->fecha ,'estado'  => $request->estado ,'nro_seniat'  => $request->nro_seniat ,'nro_factura'  => $request->nro_factura ,'mto_neto'  => $request->mto_neto ,'mto_porc_iva'  => $request->mto_porc_iva ,'mto_iva'  => $request->mto_iva ,'mto_porc_ret_iva'  => $request->mto_porc_ret_iva ,'mto_ret_iva'  => $request->mto_ret_iva ,'mto_porc_ret_isrl'  => $request->mto_porc_ret_isrl ,'mto_ret_isrl'  => $request->mto_ret_isrl ,'mto_total_general'  => $request->mto_total_general ,'nro_cxp'  => $request->nro_cxp ,'mto_total'  => $request->mto_total  ] 
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

