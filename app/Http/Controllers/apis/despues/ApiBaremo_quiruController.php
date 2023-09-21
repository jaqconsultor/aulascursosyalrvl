<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiBaremo_quiruController extends Controller
{
public $tabla = "baremo_quiru";
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
[ 'consecuti'  => $request->consecuti ,'cod_inter'  => $request->cod_inter ,'cod_clini'  => $request->cod_clini ,'ced_paciente'  => $request->ced_paciente ,'nom_interven'  => $request->nom_interven ,'nom_paciente'  => $request->nom_paciente ,'fecha_creado'  => $request->fecha_creado ,'fecha_opera'  => $request->fecha_opera ,'hora_opera'  => $request->hora_opera ,'monto_opera'  => $request->monto_opera ,'tipo_rol'  => $request->tipo_rol ,'pagada'  => $request->pagada ,'medico_prin'  => $request->medico_prin ,'medico_aux'  => $request->medico_aux ,'historia'  => $request->historia ,'diagnostico'  => $request->diagnostico ,'monto_abono'  => $request->monto_abono ,'monto_resta'  => $request->monto_resta ,'empre'  => $request->empre ,'hora_fin'  => $request->hora_fin ,'duracion'  => $request->duracion  ] 
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
[ 'consecuti'  => $request->consecuti ,'cod_inter'  => $request->cod_inter ,'cod_clini'  => $request->cod_clini ,'ced_paciente'  => $request->ced_paciente ,'nom_interven'  => $request->nom_interven ,'nom_paciente'  => $request->nom_paciente ,'fecha_creado'  => $request->fecha_creado ,'fecha_opera'  => $request->fecha_opera ,'hora_opera'  => $request->hora_opera ,'monto_opera'  => $request->monto_opera ,'tipo_rol'  => $request->tipo_rol ,'pagada'  => $request->pagada ,'medico_prin'  => $request->medico_prin ,'medico_aux'  => $request->medico_aux ,'historia'  => $request->historia ,'diagnostico'  => $request->diagnostico ,'monto_abono'  => $request->monto_abono ,'monto_resta'  => $request->monto_resta ,'empre'  => $request->empre ,'hora_fin'  => $request->hora_fin ,'duracion'  => $request->duracion  ] 
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
