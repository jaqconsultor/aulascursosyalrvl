<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiEvolucion_2Controller extends Controller
{
public $tabla = "evolucion_2";
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
[ 'especialidad'  => $request->especialidad ,'ciudad'  => $request->ciudad ,'logo'  => $request->logo ,'linea_1'  => $request->linea_1 ,'linea_2'  => $request->linea_2 ,'linea_3'  => $request->linea_3 ,'lineag_1'  => $request->lineag_1 ,'lineag_2'  => $request->lineag_2 ,'clave'  => $request->clave ,'fecha'  => $request->fecha ,'rif'  => $request->rif ,'reporte_vacio'  => $request->reporte_vacio ,'moneda'  => $request->moneda ,'impuesto'  => $request->impuesto ,'por_impues'  => $request->por_impues ,'am_pm'  => $request->am_pm ,'cantidad_paciente'  => $request->cantidad_paciente ,'lunes_i'  => $request->lunes_i ,'lunes_f'  => $request->lunes_f ,'martes_i'  => $request->martes_i ,'martes_f'  => $request->martes_f ,'miercoles_i'  => $request->miercoles_i ,'miercoles_f'  => $request->miercoles_f ,'jueves_i'  => $request->jueves_i ,'jueves_f'  => $request->jueves_f ,'vienes_i'  => $request->vienes_i ,'viernes_f'  => $request->viernes_f ,'sabado_i'  => $request->sabado_i ,'sabado_f'  => $request->sabado_f ,'tiempo_paci'  => $request->tiempo_paci ,'domingo_i'  => $request->domingo_i ,'domingo_f'  => $request->domingo_f ,'lunes'  => $request->lunes ,'martes'  => $request->martes ,'miercoles'  => $request->miercoles ,'jueves'  => $request->jueves ,'viernes'  => $request->viernes ,'sabado'  => $request->sabado ,'domingo'  => $request->domingo ,'feriado'  => $request->feriado ,'cedula'  => $request->cedula ,'min_salud'  => $request->min_salud ,'col_med'  => $request->col_med ,'cita_previa'  => $request->cita_previa ,'telefono'  => $request->telefono ,'cobra_honorarios'  => $request->cobra_honorarios ,'por_cobranza'  => $request->por_cobranza ,'por_retención_seg'  => $request->por_retención_seg ,'por_retención_part'  => $request->por_retención_part ,'accionista'  => $request->accionista ,'consultorio'  => $request->consultorio ,'contrasena'  => $request->contrasena ,'paga_iva'  => $request->paga_iva ,'domigo_f'  => $request->domigo_f  ] 
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
[ 'especialidad'  => $request->especialidad ,'ciudad'  => $request->ciudad ,'logo'  => $request->logo ,'linea_1'  => $request->linea_1 ,'linea_2'  => $request->linea_2 ,'linea_3'  => $request->linea_3 ,'lineag_1'  => $request->lineag_1 ,'lineag_2'  => $request->lineag_2 ,'clave'  => $request->clave ,'fecha'  => $request->fecha ,'rif'  => $request->rif ,'reporte_vacio'  => $request->reporte_vacio ,'moneda'  => $request->moneda ,'impuesto'  => $request->impuesto ,'por_impues'  => $request->por_impues ,'am_pm'  => $request->am_pm ,'cantidad_paciente'  => $request->cantidad_paciente ,'lunes_i'  => $request->lunes_i ,'lunes_f'  => $request->lunes_f ,'martes_i'  => $request->martes_i ,'martes_f'  => $request->martes_f ,'miercoles_i'  => $request->miercoles_i ,'miercoles_f'  => $request->miercoles_f ,'jueves_i'  => $request->jueves_i ,'jueves_f'  => $request->jueves_f ,'vienes_i'  => $request->vienes_i ,'viernes_f'  => $request->viernes_f ,'sabado_i'  => $request->sabado_i ,'sabado_f'  => $request->sabado_f ,'tiempo_paci'  => $request->tiempo_paci ,'domingo_i'  => $request->domingo_i ,'domingo_f'  => $request->domingo_f ,'lunes'  => $request->lunes ,'martes'  => $request->martes ,'miercoles'  => $request->miercoles ,'jueves'  => $request->jueves ,'viernes'  => $request->viernes ,'sabado'  => $request->sabado ,'domingo'  => $request->domingo ,'feriado'  => $request->feriado ,'cedula'  => $request->cedula ,'min_salud'  => $request->min_salud ,'col_med'  => $request->col_med ,'cita_previa'  => $request->cita_previa ,'telefono'  => $request->telefono ,'cobra_honorarios'  => $request->cobra_honorarios ,'por_cobranza'  => $request->por_cobranza ,'por_retención_seg'  => $request->por_retención_seg ,'por_retención_part'  => $request->por_retención_part ,'accionista'  => $request->accionista ,'consultorio'  => $request->consultorio ,'contrasena'  => $request->contrasena ,'paga_iva'  => $request->paga_iva ,'domigo_f'  => $request->domigo_f  ] 
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
