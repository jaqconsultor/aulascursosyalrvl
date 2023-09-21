<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Eco_obstetricoController extends Controller
{
public $tabla = "eco_obstetrico";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'gesta'  => $request->gesta ,'fur'  => $request->fur ,'eg'  => $request->eg ,'saco_gestacional'  => $request->saco_gestacional ,'circular_ovuide'  => $request->circular_ovuide ,'alargado'  => $request->alargado ,'retraido'  => $request->retraido ,'anormal'  => $request->anormal ,'movimiento_embrionario'  => $request->movimiento_embrionario ,'actividad_cardiaca'  => $request->actividad_cardiaca ,'lcc'  => $request->lcc ,'dbp'  => $request->dbp ,'huevo_anembrionado'  => $request->huevo_anembrionado ,'mola'  => $request->mola ,'restos_abortivos'  => $request->restos_abortivos ,'embarazo_ectopico'  => $request->embarazo_ectopico ,'otros'  => $request->otros ,'observacion'  => $request->observacion ,'dianostico'  => $request->dianostico ,'fecha'  => $request->fecha ,'tn'  => $request->tn ,'posicionutreo'  => $request->posicionutreo ,'cuerpo'  => $request->cuerpo ,'transverso'  => $request->transverso ,'antero'  => $request->antero ,'ovarioderlong'  => $request->ovarioderlong ,'ovarioderap'  => $request->ovarioderap ,'ovariodertras'  => $request->ovariodertras ,'ovarioizqlong'  => $request->ovarioizqlong ,'ovarioizqap'  => $request->ovarioizqap ,'ovarioizqtras'  => $request->ovarioizqtras ,'cuerpo_utero'  => $request->cuerpo_utero ,'der'  => $request->der ,'izqu'  => $request->izqu ,'lcr'  => $request->lcr ,'sa_vit'  => $request->sa_vit ,'t_nucal'  => $request->t_nucal ,'dc_venoso'  => $request->dc_venoso ,'para'  => $request->para ,'puro_texto'  => $request->puro_texto ,'posicionavf_d'  => $request->posicionavf_d ,'posicionrvf_d'  => $request->posicionrvf_d  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'gesta'  => $request->gesta ,'fur'  => $request->fur ,'eg'  => $request->eg ,'saco_gestacional'  => $request->saco_gestacional ,'circular_ovuide'  => $request->circular_ovuide ,'alargado'  => $request->alargado ,'retraido'  => $request->retraido ,'anormal'  => $request->anormal ,'movimiento_embrionario'  => $request->movimiento_embrionario ,'actividad_cardiaca'  => $request->actividad_cardiaca ,'lcc'  => $request->lcc ,'dbp'  => $request->dbp ,'huevo_anembrionado'  => $request->huevo_anembrionado ,'mola'  => $request->mola ,'restos_abortivos'  => $request->restos_abortivos ,'embarazo_ectopico'  => $request->embarazo_ectopico ,'otros'  => $request->otros ,'observacion'  => $request->observacion ,'dianostico'  => $request->dianostico ,'fecha'  => $request->fecha ,'tn'  => $request->tn ,'posicionutreo'  => $request->posicionutreo ,'cuerpo'  => $request->cuerpo ,'transverso'  => $request->transverso ,'antero'  => $request->antero ,'ovarioderlong'  => $request->ovarioderlong ,'ovarioderap'  => $request->ovarioderap ,'ovariodertras'  => $request->ovariodertras ,'ovarioizqlong'  => $request->ovarioizqlong ,'ovarioizqap'  => $request->ovarioizqap ,'ovarioizqtras'  => $request->ovarioizqtras ,'cuerpo_utero'  => $request->cuerpo_utero ,'der'  => $request->der ,'izqu'  => $request->izqu ,'lcr'  => $request->lcr ,'sa_vit'  => $request->sa_vit ,'t_nucal'  => $request->t_nucal ,'dc_venoso'  => $request->dc_venoso ,'para'  => $request->para ,'puro_texto'  => $request->puro_texto ,'posicionavf_d'  => $request->posicionavf_d ,'posicionrvf_d'  => $request->posicionrvf_d  ] 
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

