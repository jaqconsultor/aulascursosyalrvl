<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPresupuesto_operatorioController extends Controller
{
public $tabla = "presupuesto_operatorio";
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
[ 'documento'  => $request->documento ,'historia'  => $request->historia ,'diagnostico'  => $request->diagnostico ,'intervencion'  => $request->intervencion ,'ayudantes'  => $request->ayudantes ,'dias_hospi'  => $request->dias_hospi ,'arco_c'  => $request->arco_c ,'astroscopio'  => $request->astroscopio ,'sangre_qx_tipo_1'  => $request->sangre_qx_tipo_1 ,'sangre_qx_tipo_2'  => $request->sangre_qx_tipo_2 ,'sangre_qx_tipo_1_cantidad'  => $request->sangre_qx_tipo_1_cantidad ,'sangre_qx_tipo_2_cantidad'  => $request->sangre_qx_tipo_2_cantidad ,'material_sintesis'  => $request->material_sintesis ,'instrumental_traumatologico'  => $request->instrumental_traumatologico ,'honorarios'  => $request->honorarios ,'observaciones'  => $request->observaciones ,'fecha'  => $request->fecha ,'estado'  => $request->estado ,'clinica'  => $request->clinica ,'procedencia'  => $request->procedencia ,'horas_quirofano'  => $request->horas_quirofano ,'rx_torax'  => $request->rx_torax ,'rx_postoperatoria'  => $request->rx_postoperatoria ,'fluoroscopio'  => $request->fluoroscopio ,'eval_preoperatoria'  => $request->eval_preoperatoria ,'otros_estudios_de_imagenes'  => $request->otros_estudios_de_imagenes ,'interconsultas'  => $request->interconsultas ,'h_1_ayudante'  => $request->h_1_ayudante ,'h_2_ayudante'  => $request->h_2_ayudante ,'h_anestesiologo'  => $request->h_anestesiologo ,'h_tratante'  => $request->h_tratante ,'h_artroscopio'  => $request->h_artroscopio  ] 
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
[ 'documento'  => $request->documento ,'historia'  => $request->historia ,'diagnostico'  => $request->diagnostico ,'intervencion'  => $request->intervencion ,'ayudantes'  => $request->ayudantes ,'dias_hospi'  => $request->dias_hospi ,'arco_c'  => $request->arco_c ,'astroscopio'  => $request->astroscopio ,'sangre_qx_tipo_1'  => $request->sangre_qx_tipo_1 ,'sangre_qx_tipo_2'  => $request->sangre_qx_tipo_2 ,'sangre_qx_tipo_1_cantidad'  => $request->sangre_qx_tipo_1_cantidad ,'sangre_qx_tipo_2_cantidad'  => $request->sangre_qx_tipo_2_cantidad ,'material_sintesis'  => $request->material_sintesis ,'instrumental_traumatologico'  => $request->instrumental_traumatologico ,'honorarios'  => $request->honorarios ,'observaciones'  => $request->observaciones ,'fecha'  => $request->fecha ,'estado'  => $request->estado ,'clinica'  => $request->clinica ,'procedencia'  => $request->procedencia ,'horas_quirofano'  => $request->horas_quirofano ,'rx_torax'  => $request->rx_torax ,'rx_postoperatoria'  => $request->rx_postoperatoria ,'fluoroscopio'  => $request->fluoroscopio ,'eval_preoperatoria'  => $request->eval_preoperatoria ,'otros_estudios_de_imagenes'  => $request->otros_estudios_de_imagenes ,'interconsultas'  => $request->interconsultas ,'h_1_ayudante'  => $request->h_1_ayudante ,'h_2_ayudante'  => $request->h_2_ayudante ,'h_anestesiologo'  => $request->h_anestesiologo ,'h_tratante'  => $request->h_tratante ,'h_artroscopio'  => $request->h_artroscopio  ] 
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
