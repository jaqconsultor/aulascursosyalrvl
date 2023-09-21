<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Eco_dopplerController extends Controller
{
public $tabla = "eco_doppler";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'arteria_uraina_menor'  => $request->arteria_uraina_menor ,'arteria_uraina_mayor'  => $request->arteria_uraina_mayor ,'arteria_umbilical_menor'  => $request->arteria_umbilical_menor ,'arteria_umbilical_mayor'  => $request->arteria_umbilical_mayor ,'arteria_cerebral_menor'  => $request->arteria_cerebral_menor ,'arteria_cerebral_mayor'  => $request->arteria_cerebral_mayor ,'ductos_venosos'  => $request->ductos_venosos ,'ven_umbilical'  => $request->ven_umbilical ,'relac_aorta'  => $request->relac_aorta ,'texto'  => $request->texto ,'conclusion'  => $request->conclusion ,'fecha'  => $request->fecha ,'arteria_uraina_menor_izq'  => $request->arteria_uraina_menor_izq ,'arteria_uraina_mayor_izq'  => $request->arteria_uraina_mayor_izq ,'sugerencias'  => $request->sugerencias ,'gesta'  => $request->gesta ,'fur'  => $request->fur ,'relacion_ud'  => $request->relacion_ud ,'relacion_ui'  => $request->relacion_ui ,'relacion_u'  => $request->relacion_u ,'relacion_cm'  => $request->relacion_cm ,'pico_ud'  => $request->pico_ud ,'pico_ui'  => $request->pico_ui ,'pico_u'  => $request->pico_u ,'pico_cm'  => $request->pico_cm ,'para'  => $request->para ,'puro_texto'  => $request->puro_texto  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'arteria_uraina_menor'  => $request->arteria_uraina_menor ,'arteria_uraina_mayor'  => $request->arteria_uraina_mayor ,'arteria_umbilical_menor'  => $request->arteria_umbilical_menor ,'arteria_umbilical_mayor'  => $request->arteria_umbilical_mayor ,'arteria_cerebral_menor'  => $request->arteria_cerebral_menor ,'arteria_cerebral_mayor'  => $request->arteria_cerebral_mayor ,'ductos_venosos'  => $request->ductos_venosos ,'ven_umbilical'  => $request->ven_umbilical ,'relac_aorta'  => $request->relac_aorta ,'texto'  => $request->texto ,'conclusion'  => $request->conclusion ,'fecha'  => $request->fecha ,'arteria_uraina_menor_izq'  => $request->arteria_uraina_menor_izq ,'arteria_uraina_mayor_izq'  => $request->arteria_uraina_mayor_izq ,'sugerencias'  => $request->sugerencias ,'gesta'  => $request->gesta ,'fur'  => $request->fur ,'relacion_ud'  => $request->relacion_ud ,'relacion_ui'  => $request->relacion_ui ,'relacion_u'  => $request->relacion_u ,'relacion_cm'  => $request->relacion_cm ,'pico_ud'  => $request->pico_ud ,'pico_ui'  => $request->pico_ui ,'pico_u'  => $request->pico_u ,'pico_cm'  => $request->pico_cm ,'para'  => $request->para ,'puro_texto'  => $request->puro_texto  ] 
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

