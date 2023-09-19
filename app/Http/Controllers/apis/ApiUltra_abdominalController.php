<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiUltra_abdominalController extends Controller
{
public $tabla = "ultra_abdominal";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'transductor'  => $request->transductor ,'referido'  => $request->referido ,'vesicula_bilial'  => $request->vesicula_bilial ,'higado'  => $request->higado ,'porta_coledoco'  => $request->porta_coledoco ,'pancreas'  => $request->pancreas ,'rinon_derecho'  => $request->rinon_derecho ,'rinon_izquierdo'  => $request->rinon_izquierdo ,'prostata'  => $request->prostata ,'vejiga_urina'  => $request->vejiga_urina ,'vol_res_v_p_m'  => $request->vol_res_v_p_m ,'ascitis'  => $request->ascitis ,'retroperitoneo'  => $request->retroperitoneo ,'vasos_sanguineos'  => $request->vasos_sanguineos ,'otros'  => $request->otros ,'conclusiones'  => $request->conclusiones ,'puro_texto'  => $request->puro_texto  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'transductor'  => $request->transductor ,'referido'  => $request->referido ,'vesicula_bilial'  => $request->vesicula_bilial ,'higado'  => $request->higado ,'porta_coledoco'  => $request->porta_coledoco ,'pancreas'  => $request->pancreas ,'rinon_derecho'  => $request->rinon_derecho ,'rinon_izquierdo'  => $request->rinon_izquierdo ,'prostata'  => $request->prostata ,'vejiga_urina'  => $request->vejiga_urina ,'vol_res_v_p_m'  => $request->vol_res_v_p_m ,'ascitis'  => $request->ascitis ,'retroperitoneo'  => $request->retroperitoneo ,'vasos_sanguineos'  => $request->vasos_sanguineos ,'otros'  => $request->otros ,'conclusiones'  => $request->conclusiones ,'puro_texto'  => $request->puro_texto  ] 
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
