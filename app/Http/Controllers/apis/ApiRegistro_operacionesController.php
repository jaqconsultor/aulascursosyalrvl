<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiRegistro_operacionesController extends Controller
{
public $tabla = "registro_operaciones";
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
[ 'registro'  => $request->registro ,'dia_registro'  => $request->dia_registro ,'hora_registro'  => $request->hora_registro ,'operador'  => $request->operador ,'status'  => $request->status ,'operacion'  => $request->operacion ,'descricion'  => $request->descricion ,'historia'  => $request->historia ,'consulta'  => $request->consulta ,'medico'  => $request->medico ,'paciente'  => $request->paciente  ] 
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
[ 'registro'  => $request->registro ,'dia_registro'  => $request->dia_registro ,'hora_registro'  => $request->hora_registro ,'operador'  => $request->operador ,'status'  => $request->status ,'operacion'  => $request->operacion ,'descricion'  => $request->descricion ,'historia'  => $request->historia ,'consulta'  => $request->consulta ,'medico'  => $request->medico ,'paciente'  => $request->paciente  ] 
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
