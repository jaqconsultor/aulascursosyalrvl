<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiUltra_mamaController extends Controller
{
public $tabla = "ultra_mama";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'referido'  => $request->referido ,'menarquia'  => $request->menarquia ,'para'  => $request->para ,'quirurgicos'  => $request->quirurgicos ,'hormonas'  => $request->hormonas ,'tranductor'  => $request->tranductor ,'mama_derecha'  => $request->mama_derecha ,'axila_derecha'  => $request->axila_derecha ,'mama_izquierda'  => $request->mama_izquierda ,'axila_izquierda'  => $request->axila_izquierda ,'conclusion'  => $request->conclusion ,'puro_texto'  => $request->puro_texto  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'referido'  => $request->referido ,'menarquia'  => $request->menarquia ,'para'  => $request->para ,'quirurgicos'  => $request->quirurgicos ,'hormonas'  => $request->hormonas ,'tranductor'  => $request->tranductor ,'mama_derecha'  => $request->mama_derecha ,'axila_derecha'  => $request->axila_derecha ,'mama_izquierda'  => $request->mama_izquierda ,'axila_izquierda'  => $request->axila_izquierda ,'conclusion'  => $request->conclusion ,'puro_texto'  => $request->puro_texto  ] 
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
