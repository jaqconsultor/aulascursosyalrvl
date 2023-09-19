<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiColaController extends Controller
{
public $tabla = "cola";
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
[ 'fecha'  => $request->fecha ,'numhistoria'  => $request->numhistoria ,'numorden'  => $request->numorden ,'atendido'  => $request->atendido ,'estado'  => $request->estado ,'turno'  => $request->turno ,'motivo'  => $request->motivo ,'monto'  => $request->monto ,'hora_ini'  => $request->hora_ini ,'hora_fin'  => $request->hora_fin ,'tiempo'  => $request->tiempo ,'tipo'  => $request->tipo ,'conse'  => $request->conse ,'medico'  => $request->medico ,'sms'  => $request->sms ,'sms_text'  => $request->sms_text  ] 
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
[ 'fecha'  => $request->fecha ,'numhistoria'  => $request->numhistoria ,'numorden'  => $request->numorden ,'atendido'  => $request->atendido ,'estado'  => $request->estado ,'turno'  => $request->turno ,'motivo'  => $request->motivo ,'monto'  => $request->monto ,'hora_ini'  => $request->hora_ini ,'hora_fin'  => $request->hora_fin ,'tiempo'  => $request->tiempo ,'tipo'  => $request->tipo ,'conse'  => $request->conse ,'medico'  => $request->medico ,'sms'  => $request->sms ,'sms_text'  => $request->sms_text  ] 
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
