<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPrena_exames_bController extends Controller
{
public $tabla = "prena_exames_b";
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
[ 'historia'  => $request->historia ,'fecha'  => $request->fecha ,'gesta_clave'  => $request->gesta_clave ,'hemoglobina'  => $request->hemoglobina ,'hematoc'  => $request->hematoc ,'glob_blanco'  => $request->glob_blanco ,'neut_linf'  => $request->neut_linf ,'vsg'  => $request->vsg ,'plaquetas'  => $request->plaquetas ,'glicemia_basal'  => $request->glicemia_basal ,'glicemia_post_prandial'  => $request->glicemia_post_prandial ,'insulina_basal'  => $request->insulina_basal ,'insulina_post_prandial'  => $request->insulina_post_prandial ,'urea'  => $request->urea ,'creatinina'  => $request->creatinina ,'ac_urico'  => $request->ac_urico ,'triglicer'  => $request->triglicer ,'colesterol'  => $request->colesterol ,'hdl_colest'  => $request->hdl_colest ,'ldl_colest'  => $request->ldl_colest ,'hiv'  => $request->hiv ,'vdrl'  => $request->vdrl ,'orina'  => $request->orina ,'urocultivo'  => $request->urocultivo ,'heces'  => $request->heces ,'t3'  => $request->t3 ,'t4'  => $request->t4 ,'tsh'  => $request->tsh ,'fsh'  => $request->fsh ,'lh'  => $request->lh ,'estradiol'  => $request->estradiol ,'progester'  => $request->progester ,'prolactina'  => $request->prolactina ,'toxo_igm'  => $request->toxo_igm ,'toxo_igg'  => $request->toxo_igg ,'otros'  => $request->otros  ] 
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
[ 'historia'  => $request->historia ,'fecha'  => $request->fecha ,'gesta_clave'  => $request->gesta_clave ,'hemoglobina'  => $request->hemoglobina ,'hematoc'  => $request->hematoc ,'glob_blanco'  => $request->glob_blanco ,'neut_linf'  => $request->neut_linf ,'vsg'  => $request->vsg ,'plaquetas'  => $request->plaquetas ,'glicemia_basal'  => $request->glicemia_basal ,'glicemia_post_prandial'  => $request->glicemia_post_prandial ,'insulina_basal'  => $request->insulina_basal ,'insulina_post_prandial'  => $request->insulina_post_prandial ,'urea'  => $request->urea ,'creatinina'  => $request->creatinina ,'ac_urico'  => $request->ac_urico ,'triglicer'  => $request->triglicer ,'colesterol'  => $request->colesterol ,'hdl_colest'  => $request->hdl_colest ,'ldl_colest'  => $request->ldl_colest ,'hiv'  => $request->hiv ,'vdrl'  => $request->vdrl ,'orina'  => $request->orina ,'urocultivo'  => $request->urocultivo ,'heces'  => $request->heces ,'t3'  => $request->t3 ,'t4'  => $request->t4 ,'tsh'  => $request->tsh ,'fsh'  => $request->fsh ,'lh'  => $request->lh ,'estradiol'  => $request->estradiol ,'progester'  => $request->progester ,'prolactina'  => $request->prolactina ,'toxo_igm'  => $request->toxo_igm ,'toxo_igg'  => $request->toxo_igg ,'otros'  => $request->otros  ] 
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
