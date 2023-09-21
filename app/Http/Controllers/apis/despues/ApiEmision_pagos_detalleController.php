<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiEmision_pagos_detalleController extends Controller
{
public $tabla = "emision_pagos_detalle";
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
[ 'nro_registro'  => $request->nro_registro ,'nro_emision'  => $request->nro_emision ,'nro_cxp'  => $request->nro_cxp ,'nro_mov'  => $request->nro_mov ,'origen_cxp'  => $request->origen_cxp ,'cxp_codigo'  => $request->cxp_codigo ,'cxp_descripcion'  => $request->cxp_descripcion ,'fecha_emision'  => $request->fecha_emision ,'nro_documento'  => $request->nro_documento ,'tip_documento'  => $request->tip_documento ,'saldo_pagar'  => $request->saldo_pagar ,'monto_pagar'  => $request->monto_pagar ,'estado'  => $request->estado  ] 
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
[ 'nro_registro'  => $request->nro_registro ,'nro_emision'  => $request->nro_emision ,'nro_cxp'  => $request->nro_cxp ,'nro_mov'  => $request->nro_mov ,'origen_cxp'  => $request->origen_cxp ,'cxp_codigo'  => $request->cxp_codigo ,'cxp_descripcion'  => $request->cxp_descripcion ,'fecha_emision'  => $request->fecha_emision ,'nro_documento'  => $request->nro_documento ,'tip_documento'  => $request->tip_documento ,'saldo_pagar'  => $request->saldo_pagar ,'monto_pagar'  => $request->monto_pagar ,'estado'  => $request->estado  ] 
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
