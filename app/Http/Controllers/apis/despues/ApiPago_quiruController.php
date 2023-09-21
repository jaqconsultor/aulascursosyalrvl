<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPago_quiruController extends Controller
{
public $tabla = "pago_quiru";
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
[ 'cod_pagos'  => $request->cod_pagos ,'consecuti'  => $request->consecuti ,'fecha'  => $request->fecha ,'monto_total'  => $request->monto_total ,'abono'  => $request->abono ,'resta'  => $request->resta ,'pago'  => $request->pago ,'hora_pago'  => $request->hora_pago  ] 
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
[ 'cod_pagos'  => $request->cod_pagos ,'consecuti'  => $request->consecuti ,'fecha'  => $request->fecha ,'monto_total'  => $request->monto_total ,'abono'  => $request->abono ,'resta'  => $request->resta ,'pago'  => $request->pago ,'hora_pago'  => $request->hora_pago  ] 
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
