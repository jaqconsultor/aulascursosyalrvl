<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiDieta_pacienteController extends Controller
{
public $tabla = "dieta_paciente";
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
[ 'histroria'  => $request->histroria ,'consulta'  => $request->consulta ,'cod_dieta'  => $request->cod_dieta ,'descripcion'  => $request->descripcion ,'ejecutada'  => $request->ejecutada ,'calorias'  => $request->calorias ,'dieta'  => $request->dieta  ] 
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
[ 'histroria'  => $request->histroria ,'consulta'  => $request->consulta ,'cod_dieta'  => $request->cod_dieta ,'descripcion'  => $request->descripcion ,'ejecutada'  => $request->ejecutada ,'calorias'  => $request->calorias ,'dieta'  => $request->dieta  ] 
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
