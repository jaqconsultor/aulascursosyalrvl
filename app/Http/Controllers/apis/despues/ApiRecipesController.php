<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiRecipesController extends Controller
{
public $tabla = "recipes";
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
[ 'nrohistoria'  => $request->nrohistoria ,'nroconsulta'  => $request->nroconsulta ,'codemedicina'  => $request->codemedicina ,'indicaciones'  => $request->indicaciones ,'cantidad'  => $request->cantidad ,'descripcion'  => $request->descripcion ,'orden'  => $request->orden ,'fecha'  => $request->fecha ,'recipe'  => $request->recipe ,'comple'  => $request->comple  ] 
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
[ 'nrohistoria'  => $request->nrohistoria ,'nroconsulta'  => $request->nroconsulta ,'codemedicina'  => $request->codemedicina ,'indicaciones'  => $request->indicaciones ,'cantidad'  => $request->cantidad ,'descripcion'  => $request->descripcion ,'orden'  => $request->orden ,'fecha'  => $request->fecha ,'recipe'  => $request->recipe ,'comple'  => $request->comple  ] 
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
