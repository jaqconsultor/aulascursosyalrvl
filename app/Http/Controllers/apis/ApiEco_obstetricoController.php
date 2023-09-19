<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiEco_obstetricoController extends Controller
{
public $tabla = "eco_obstetrico";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'gesta'  => $request->gesta ,'fur'  => $request->fur ,'eg'  => $request->eg ,'saco_gestacional'  => $request->saco_gestacional ,'circular_ovuide'  => $request->circular_ovuide ,'alargado'  => $request->alargado ,'retraido'  => $request->retraido ,'anormal'  => $request->anormal ,'movimiento_embrionario'  => $request->movimiento_embrionario ,'actividad_cardiaca'  => $request->actividad_cardiaca ,'lcc'  => $request->lcc ,'dbp'  => $request->dbp ,'huevo_anembrionado'  => $request->huevo_anembrionado ,'mola'  => $request->mola ,'restos_abortivos'  => $request->restos_abortivos ,'embarazo_ectopico'  => $request->embarazo_ectopico ,'otros'  => $request->otros ,'observacion'  => $request->observacion ,'dianostico'  => $request->dianostico ,'fecha'  => $request->fecha ,'tn'  => $request->tn ,'posicionutreo'  => $request->posicionutreo ,'cuerpo'  => $request->cuerpo ,'transverso'  => $request->transverso ,'antero'  => $request->antero ,'ovarioderlong'  => $request->ovarioderlong ,'ovarioderap'  => $request->ovarioderap ,'ovariodertras'  => $request->ovariodertras ,'ovarioizqlong'  => $request->ovarioizqlong ,'ovarioizqap'  => $request->ovarioizqap ,'ovarioizqtras'  => $request->ovarioizqtras ,'cuerpo_utero'  => $request->cuerpo_utero ,'der'  => $request->der ,'izqu'  => $request->izqu ,'lcr'  => $request->lcr ,'sa_vit'  => $request->sa_vit ,'t_nucal'  => $request->t_nucal ,'dc_venoso'  => $request->dc_venoso ,'para'  => $request->para ,'puro_texto'  => $request->puro_texto ,'posicionavf_d'  => $request->posicionavf_d ,'posicionrvf_d'  => $request->posicionrvf_d  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'gesta'  => $request->gesta ,'fur'  => $request->fur ,'eg'  => $request->eg ,'saco_gestacional'  => $request->saco_gestacional ,'circular_ovuide'  => $request->circular_ovuide ,'alargado'  => $request->alargado ,'retraido'  => $request->retraido ,'anormal'  => $request->anormal ,'movimiento_embrionario'  => $request->movimiento_embrionario ,'actividad_cardiaca'  => $request->actividad_cardiaca ,'lcc'  => $request->lcc ,'dbp'  => $request->dbp ,'huevo_anembrionado'  => $request->huevo_anembrionado ,'mola'  => $request->mola ,'restos_abortivos'  => $request->restos_abortivos ,'embarazo_ectopico'  => $request->embarazo_ectopico ,'otros'  => $request->otros ,'observacion'  => $request->observacion ,'dianostico'  => $request->dianostico ,'fecha'  => $request->fecha ,'tn'  => $request->tn ,'posicionutreo'  => $request->posicionutreo ,'cuerpo'  => $request->cuerpo ,'transverso'  => $request->transverso ,'antero'  => $request->antero ,'ovarioderlong'  => $request->ovarioderlong ,'ovarioderap'  => $request->ovarioderap ,'ovariodertras'  => $request->ovariodertras ,'ovarioizqlong'  => $request->ovarioizqlong ,'ovarioizqap'  => $request->ovarioizqap ,'ovarioizqtras'  => $request->ovarioizqtras ,'cuerpo_utero'  => $request->cuerpo_utero ,'der'  => $request->der ,'izqu'  => $request->izqu ,'lcr'  => $request->lcr ,'sa_vit'  => $request->sa_vit ,'t_nucal'  => $request->t_nucal ,'dc_venoso'  => $request->dc_venoso ,'para'  => $request->para ,'puro_texto'  => $request->puro_texto ,'posicionavf_d'  => $request->posicionavf_d ,'posicionrvf_d'  => $request->posicionrvf_d  ] 
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
