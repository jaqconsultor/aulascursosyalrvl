<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Ultra_testiculosController extends Controller
{
public $tabla = "ultra_testiculos";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'equipo'  => $request->equipo ,'transductor'  => $request->transductor ,'frecuencia'  => $request->frecuencia ,'motivo_estudio'  => $request->motivo_estudio ,'td_long'  => $request->td_long ,'td_tranv'  => $request->td_tranv ,'td_post'  => $request->td_post ,'td_parequima'  => $request->td_parequima ,'td_epididimo'  => $request->td_epididimo ,'td_epididimo_med_1'  => $request->td_epididimo_med_1 ,'td_epididimo_med_2'  => $request->td_epididimo_med_2 ,'td_hidrocele'  => $request->td_hidrocele ,'td_diametro_plexo'  => $request->td_diametro_plexo ,'ti_long'  => $request->ti_long ,'ti_tranv'  => $request->ti_tranv ,'ti_post'  => $request->ti_post ,'ti_parequima'  => $request->ti_parequima ,'ti_epididimo'  => $request->ti_epididimo ,'ti_epididimo_med_1'  => $request->ti_epididimo_med_1 ,'ti_epididimo_med_2'  => $request->ti_epididimo_med_2 ,'ti_hidrocele'  => $request->ti_hidrocele ,'ti_diametro_plexo'  => $request->ti_diametro_plexo ,'conclusion'  => $request->conclusion ,'hallazgos'  => $request->hallazgos ,'medico_1'  => $request->medico_1 ,'medico_2'  => $request->medico_2 ,'doppler_td'  => $request->doppler_td ,'doppler_ti'  => $request->doppler_ti ,'observaciones'  => $request->observaciones ,'puro_texto'  => $request->puro_texto  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'equipo'  => $request->equipo ,'transductor'  => $request->transductor ,'frecuencia'  => $request->frecuencia ,'motivo_estudio'  => $request->motivo_estudio ,'td_long'  => $request->td_long ,'td_tranv'  => $request->td_tranv ,'td_post'  => $request->td_post ,'td_parequima'  => $request->td_parequima ,'td_epididimo'  => $request->td_epididimo ,'td_epididimo_med_1'  => $request->td_epididimo_med_1 ,'td_epididimo_med_2'  => $request->td_epididimo_med_2 ,'td_hidrocele'  => $request->td_hidrocele ,'td_diametro_plexo'  => $request->td_diametro_plexo ,'ti_long'  => $request->ti_long ,'ti_tranv'  => $request->ti_tranv ,'ti_post'  => $request->ti_post ,'ti_parequima'  => $request->ti_parequima ,'ti_epididimo'  => $request->ti_epididimo ,'ti_epididimo_med_1'  => $request->ti_epididimo_med_1 ,'ti_epididimo_med_2'  => $request->ti_epididimo_med_2 ,'ti_hidrocele'  => $request->ti_hidrocele ,'ti_diametro_plexo'  => $request->ti_diametro_plexo ,'conclusion'  => $request->conclusion ,'hallazgos'  => $request->hallazgos ,'medico_1'  => $request->medico_1 ,'medico_2'  => $request->medico_2 ,'doppler_td'  => $request->doppler_td ,'doppler_ti'  => $request->doppler_ti ,'observaciones'  => $request->observaciones ,'puro_texto'  => $request->puro_texto  ] 
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

