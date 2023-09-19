<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPre_natal_observacionesController extends Controller
{
public $tabla = "pre_natal_observaciones";
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
[ 'historia'  => $request->historia ,'fur'  => $request->fur ,'menarquia'  => $request->menarquia ,'gestas'  => $request->gestas ,'parto'  => $request->parto ,'tipiaje'  => $request->tipiaje ,'observaciones'  => $request->observaciones ,'tipiaje_cony'  => $request->tipiaje_cony ,'gesta_clave'  => $request->gesta_clave ,'partos'  => $request->partos ,'cesarea'  => $request->cesarea ,'abortos'  => $request->abortos ,'otros'  => $request->otros ,'final'  => $request->final ,'multiple'  => $request->multiple ,'cantidad'  => $request->cantidad  ] 
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
[ 'historia'  => $request->historia ,'fur'  => $request->fur ,'menarquia'  => $request->menarquia ,'gestas'  => $request->gestas ,'parto'  => $request->parto ,'tipiaje'  => $request->tipiaje ,'observaciones'  => $request->observaciones ,'tipiaje_cony'  => $request->tipiaje_cony ,'gesta_clave'  => $request->gesta_clave ,'partos'  => $request->partos ,'cesarea'  => $request->cesarea ,'abortos'  => $request->abortos ,'otros'  => $request->otros ,'final'  => $request->final ,'multiple'  => $request->multiple ,'cantidad'  => $request->cantidad  ] 
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
