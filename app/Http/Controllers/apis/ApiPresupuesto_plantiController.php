<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPresupuesto_plantiController extends Controller
{
public $tabla = "presupuesto_planti";
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
[ 'consecutivo'  => $request->consecutivo ,'tipo_precio'  => $request->tipo_precio ,'total_costo'  => $request->total_costo ,'total_final'  => $request->total_final ,'notas'  => $request->notas ,'tipo_doc'  => $request->tipo_doc ,'nom_presupuesto'  => $request->nom_presupuesto  ] 
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
[ 'consecutivo'  => $request->consecutivo ,'tipo_precio'  => $request->tipo_precio ,'total_costo'  => $request->total_costo ,'total_final'  => $request->total_final ,'notas'  => $request->notas ,'tipo_doc'  => $request->tipo_doc ,'nom_presupuesto'  => $request->nom_presupuesto  ] 
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
