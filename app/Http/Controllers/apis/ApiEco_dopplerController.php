<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiEco_dopplerController extends Controller
{
public $tabla = "eco_doppler";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'arteria_uraina_menor'  => $request->arteria_uraina_menor ,'arteria_uraina_mayor'  => $request->arteria_uraina_mayor ,'arteria_umbilical_menor'  => $request->arteria_umbilical_menor ,'arteria_umbilical_mayor'  => $request->arteria_umbilical_mayor ,'arteria_cerebral_menor'  => $request->arteria_cerebral_menor ,'arteria_cerebral_mayor'  => $request->arteria_cerebral_mayor ,'ductos_venosos'  => $request->ductos_venosos ,'ven_umbilical'  => $request->ven_umbilical ,'relac_aorta'  => $request->relac_aorta ,'texto'  => $request->texto ,'conclusion'  => $request->conclusion ,'fecha'  => $request->fecha ,'arteria_uraina_menor_izq'  => $request->arteria_uraina_menor_izq ,'arteria_uraina_mayor_izq'  => $request->arteria_uraina_mayor_izq ,'sugerencias'  => $request->sugerencias ,'gesta'  => $request->gesta ,'fur'  => $request->fur ,'relacion_ud'  => $request->relacion_ud ,'relacion_ui'  => $request->relacion_ui ,'relacion_u'  => $request->relacion_u ,'relacion_cm'  => $request->relacion_cm ,'pico_ud'  => $request->pico_ud ,'pico_ui'  => $request->pico_ui ,'pico_u'  => $request->pico_u ,'pico_cm'  => $request->pico_cm ,'para'  => $request->para ,'puro_texto'  => $request->puro_texto  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'arteria_uraina_menor'  => $request->arteria_uraina_menor ,'arteria_uraina_mayor'  => $request->arteria_uraina_mayor ,'arteria_umbilical_menor'  => $request->arteria_umbilical_menor ,'arteria_umbilical_mayor'  => $request->arteria_umbilical_mayor ,'arteria_cerebral_menor'  => $request->arteria_cerebral_menor ,'arteria_cerebral_mayor'  => $request->arteria_cerebral_mayor ,'ductos_venosos'  => $request->ductos_venosos ,'ven_umbilical'  => $request->ven_umbilical ,'relac_aorta'  => $request->relac_aorta ,'texto'  => $request->texto ,'conclusion'  => $request->conclusion ,'fecha'  => $request->fecha ,'arteria_uraina_menor_izq'  => $request->arteria_uraina_menor_izq ,'arteria_uraina_mayor_izq'  => $request->arteria_uraina_mayor_izq ,'sugerencias'  => $request->sugerencias ,'gesta'  => $request->gesta ,'fur'  => $request->fur ,'relacion_ud'  => $request->relacion_ud ,'relacion_ui'  => $request->relacion_ui ,'relacion_u'  => $request->relacion_u ,'relacion_cm'  => $request->relacion_cm ,'pico_ud'  => $request->pico_ud ,'pico_ui'  => $request->pico_ui ,'pico_u'  => $request->pico_u ,'pico_cm'  => $request->pico_cm ,'para'  => $request->para ,'puro_texto'  => $request->puro_texto  ] 
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
