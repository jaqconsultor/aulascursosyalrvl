<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiHis_con_pre_facturaController extends Controller
{
public $tabla = "his_con_pre_factura";
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
[ 'id_registro'  => $request->id_registro ,'numhistoria'  => $request->numhistoria ,'nroconsulta'  => $request->nroconsulta ,'codigo'  => $request->codigo ,'descripcion'  => $request->descripcion ,'cantidad'  => $request->cantidad ,'monto'  => $request->monto  ] 
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
[ 'id_registro'  => $request->id_registro ,'numhistoria'  => $request->numhistoria ,'nroconsulta'  => $request->nroconsulta ,'codigo'  => $request->codigo ,'descripcion'  => $request->descripcion ,'cantidad'  => $request->cantidad ,'monto'  => $request->monto  ] 
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
