<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiCuentas_x_pagar_movController extends Controller
{
public $tabla = "cuentas_x_pagar_mov";
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
[ 'nro_registro'  => $request->nro_registro ,'nro_cxp'  => $request->nro_cxp ,'nro_mov'  => $request->nro_mov ,'fecha_emision'  => $request->fecha_emision ,'nro_documento'  => $request->nro_documento ,'tip_documento'  => $request->tip_documento ,'monto_pagar'  => $request->monto_pagar  ] 
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
[ 'nro_registro'  => $request->nro_registro ,'nro_cxp'  => $request->nro_cxp ,'nro_mov'  => $request->nro_mov ,'fecha_emision'  => $request->fecha_emision ,'nro_documento'  => $request->nro_documento ,'tip_documento'  => $request->tip_documento ,'monto_pagar'  => $request->monto_pagar  ] 
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
