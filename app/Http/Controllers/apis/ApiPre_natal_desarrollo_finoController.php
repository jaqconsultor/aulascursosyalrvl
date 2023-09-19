<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPre_natal_desarrollo_finoController extends Controller
{
public $tabla = "pre_natal_desarrollo_fino";
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
[ 'historia'  => $request->historia ,'fecha'  => $request->fecha ,'eg_fur'  => $request->eg_fur ,'eg_eco'  => $request->eg_eco ,'peso'  => $request->peso ,'ta'  => $request->ta ,'au'  => $request->au ,'mf'  => $request->mf ,'presentacion'  => $request->presentacion ,'edemas'  => $request->edemas ,'dbp'  => $request->dbp ,'lf'  => $request->lf ,'ac_cardiaca'  => $request->ac_cardiaca ,'la'  => $request->la ,'sg_cri'  => $request->sg_cri ,'plac_grado'  => $request->plac_grado ,'gesta_clave'  => $request->gesta_clave ,'consulta'  => $request->consulta ,'femur'  => $request->femur ,'lcc'  => $request->lcc ,'dbpf'  => $request->dbpf ,'varice'  => $request->varice ,'peso_fetal'  => $request->peso_fetal ,'foco_f'  => $request->foco_f ,'multiple'  => $request->multiple ,'cantidad'  => $request->cantidad  ] 
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
[ 'historia'  => $request->historia ,'fecha'  => $request->fecha ,'eg_fur'  => $request->eg_fur ,'eg_eco'  => $request->eg_eco ,'peso'  => $request->peso ,'ta'  => $request->ta ,'au'  => $request->au ,'mf'  => $request->mf ,'presentacion'  => $request->presentacion ,'edemas'  => $request->edemas ,'dbp'  => $request->dbp ,'lf'  => $request->lf ,'ac_cardiaca'  => $request->ac_cardiaca ,'la'  => $request->la ,'sg_cri'  => $request->sg_cri ,'plac_grado'  => $request->plac_grado ,'gesta_clave'  => $request->gesta_clave ,'consulta'  => $request->consulta ,'femur'  => $request->femur ,'lcc'  => $request->lcc ,'dbpf'  => $request->dbpf ,'varice'  => $request->varice ,'peso_fetal'  => $request->peso_fetal ,'foco_f'  => $request->foco_f ,'multiple'  => $request->multiple ,'cantidad'  => $request->cantidad  ] 
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
