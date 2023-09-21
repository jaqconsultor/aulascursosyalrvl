<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiFacturas_compras_detalleController extends Controller
{
public $tabla = "facturas_compras_detalle";
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
[ 'id_registro'  => $request->id_registro ,'id_fac_prov'  => $request->id_fac_prov ,'des_concepto'  => $request->des_concepto ,'cantidad'  => $request->cantidad ,'monto'  => $request->monto ,'monto_total'  => $request->monto_total ,'id_factura_compra'  => $request->id_factura_compra  ] 
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
[ 'id_registro'  => $request->id_registro ,'id_fac_prov'  => $request->id_fac_prov ,'des_concepto'  => $request->des_concepto ,'cantidad'  => $request->cantidad ,'monto'  => $request->monto ,'monto_total'  => $request->monto_total ,'id_factura_compra'  => $request->id_factura_compra  ] 
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
