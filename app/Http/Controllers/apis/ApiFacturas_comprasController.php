<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiFacturas_comprasController extends Controller
{
public $tabla = "facturas_compras";
    public $registro = null;

     public function __construct() { 
        
     }
     
      public function index()
      {
 
         $registros = DB::table($this->tabla)->get();
 
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
 
      }
  
      public function store(Request $request)
      {
         $registros = DB::table($this->tabla)->updateOrInsert(
[ 'id_factura_compra'  => $request->id_factura_compra ,'cod_prov'  => $request->cod_prov ,'id_tipo_concepto'  => $request->id_tipo_concepto ,'fecha'  => $request->fecha ,'estado'  => $request->estado ,'nro_seniat'  => $request->nro_seniat ,'nro_factura'  => $request->nro_factura ,'mto_neto'  => $request->mto_neto ,'mto_porc_iva'  => $request->mto_porc_iva ,'mto_iva'  => $request->mto_iva ,'mto_porc_ret_iva'  => $request->mto_porc_ret_iva ,'mto_ret_iva'  => $request->mto_ret_iva ,'mto_porc_ret_isrl'  => $request->mto_porc_ret_isrl ,'mto_ret_isrl'  => $request->mto_ret_isrl ,'mto_total_general'  => $request->mto_total_general ,'nro_cxp'  => $request->nro_cxp ,'mto_total'  => $request->mto_total  ] 
         );
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
 
     }
  
      public function show($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
      }
  
      public function edit($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
      }
  
      public function update(Request $request, $id)
      {
         $registros = DB::table($this->tabla)->where('id', $id)->update(
[ 'id_factura_compra'  => $request->id_factura_compra ,'cod_prov'  => $request->cod_prov ,'id_tipo_concepto'  => $request->id_tipo_concepto ,'fecha'  => $request->fecha ,'estado'  => $request->estado ,'nro_seniat'  => $request->nro_seniat ,'nro_factura'  => $request->nro_factura ,'mto_neto'  => $request->mto_neto ,'mto_porc_iva'  => $request->mto_porc_iva ,'mto_iva'  => $request->mto_iva ,'mto_porc_ret_iva'  => $request->mto_porc_ret_iva ,'mto_ret_iva'  => $request->mto_ret_iva ,'mto_porc_ret_isrl'  => $request->mto_porc_ret_isrl ,'mto_ret_isrl'  => $request->mto_ret_isrl ,'mto_total_general'  => $request->mto_total_general ,'nro_cxp'  => $request->nro_cxp ,'mto_total'  => $request->mto_total  ] 
        );
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
      }
  
      public function destroy($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->delete();
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
      }
  
}
