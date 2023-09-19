<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Prena_exames_bController extends Controller
{
public $tabla = "prena_exames_b";
    public $registro = null;

     public function __construct() { 
        
     }
     
     public function index()
     {
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     public function create()
     {
         return view( 'crud' . $this->tabla.'.create');
     }
 
     public function store(Request $request)
     {
        DB::table($this->tabla)->updateOrInsert(
[ 'historia'  => $request->historia ,'fecha'  => $request->fecha ,'gesta_clave'  => $request->gesta_clave ,'hemoglobina'  => $request->hemoglobina ,'hematoc'  => $request->hematoc ,'glob_blanco'  => $request->glob_blanco ,'neut_linf'  => $request->neut_linf ,'vsg'  => $request->vsg ,'plaquetas'  => $request->plaquetas ,'glicemia_basal'  => $request->glicemia_basal ,'glicemia_post_prandial'  => $request->glicemia_post_prandial ,'insulina_basal'  => $request->insulina_basal ,'insulina_post_prandial'  => $request->insulina_post_prandial ,'urea'  => $request->urea ,'creatinina'  => $request->creatinina ,'ac_urico'  => $request->ac_urico ,'triglicer'  => $request->triglicer ,'colesterol'  => $request->colesterol ,'hdl_colest'  => $request->hdl_colest ,'ldl_colest'  => $request->ldl_colest ,'hiv'  => $request->hiv ,'vdrl'  => $request->vdrl ,'orina'  => $request->orina ,'urocultivo'  => $request->urocultivo ,'heces'  => $request->heces ,'t3'  => $request->t3 ,'t4'  => $request->t4 ,'tsh'  => $request->tsh ,'fsh'  => $request->fsh ,'lh'  => $request->lh ,'estradiol'  => $request->estradiol ,'progester'  => $request->progester ,'prolactina'  => $request->prolactina ,'toxo_igm'  => $request->toxo_igm ,'toxo_igg'  => $request->toxo_igg ,'otros'  => $request->otros  ] 
        );
         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function show($id)
     {
        $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
        $registros = $this->registros;
        return view('crud' . $this->tabla . '.show',compact('registros'));
     }
 
     public function edit($id)
     {
         $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         $registros = $this->registros;
         return view('crud' .$this->tabla .'.edit',compact('registros'));
     }
 
     public function update(Request $request, $id)
     {
        
        $affected = DB::table($this->tabla)->where('id', $id)->update(
[ 'historia'  => $request->historia ,'fecha'  => $request->fecha ,'gesta_clave'  => $request->gesta_clave ,'hemoglobina'  => $request->hemoglobina ,'hematoc'  => $request->hematoc ,'glob_blanco'  => $request->glob_blanco ,'neut_linf'  => $request->neut_linf ,'vsg'  => $request->vsg ,'plaquetas'  => $request->plaquetas ,'glicemia_basal'  => $request->glicemia_basal ,'glicemia_post_prandial'  => $request->glicemia_post_prandial ,'insulina_basal'  => $request->insulina_basal ,'insulina_post_prandial'  => $request->insulina_post_prandial ,'urea'  => $request->urea ,'creatinina'  => $request->creatinina ,'ac_urico'  => $request->ac_urico ,'triglicer'  => $request->triglicer ,'colesterol'  => $request->colesterol ,'hdl_colest'  => $request->hdl_colest ,'ldl_colest'  => $request->ldl_colest ,'hiv'  => $request->hiv ,'vdrl'  => $request->vdrl ,'orina'  => $request->orina ,'urocultivo'  => $request->urocultivo ,'heces'  => $request->heces ,'t3'  => $request->t3 ,'t4'  => $request->t4 ,'tsh'  => $request->tsh ,'fsh'  => $request->fsh ,'lh'  => $request->lh ,'estradiol'  => $request->estradiol ,'progester'  => $request->progester ,'prolactina'  => $request->prolactina ,'toxo_igm'  => $request->toxo_igm ,'toxo_igg'  => $request->toxo_igg ,'otros'  => $request->otros  ] 
        );

         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function destroy($id)
     {
        $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     
}

