<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiUltra_prostaticoController extends Controller
{
public $tabla = "ultra_prostatico";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'psa_total'  => $request->psa_total ,'psa_libre'  => $request->psa_libre ,'psa_relacion'  => $request->psa_relacion ,'tacto_rectal'  => $request->tacto_rectal ,'tex_basico'  => $request->tex_basico ,'anestesia'  => $request->anestesia ,'diametro_long'  => $request->diametro_long ,'diametro_trans'  => $request->diametro_trans ,'diametro_anterop'  => $request->diametro_anterop ,'volumen'  => $request->volumen ,'densidad'  => $request->densidad ,'capsula'  => $request->capsula ,'nodulos'  => $request->nodulos ,'nodulos_ubicacion'  => $request->nodulos_ubicacion ,'nodulos_caracteristicas'  => $request->nodulos_caracteristicas ,'protocolo_biopsia_cilindros_de'  => $request->protocolo_biopsia_cilindros_de ,'protocolo_biopsia_cilindros_iz'  => $request->protocolo_biopsia_cilindros_iz ,'conclusion'  => $request->conclusion ,'medico_1'  => $request->medico_1 ,'medico_2'  => $request->medico_2 ,'equipo'  => $request->equipo ,'trasductor'  => $request->trasductor ,'frecuencia'  => $request->frecuencia ,'diametro_ld'  => $request->diametro_ld ,'diametro_li'  => $request->diametro_li ,'diametro_long_ld'  => $request->diametro_long_ld ,'diametro_long_li'  => $request->diametro_long_li ,'diametro_trans_ld'  => $request->diametro_trans_ld ,'diametro_trans_li'  => $request->diametro_trans_li ,'diametro_anterop_ld'  => $request->diametro_anterop_ld ,'diametro_anterop_li'  => $request->diametro_anterop_li ,'vesiculas_s'  => $request->vesiculas_s ,'puro_texto'  => $request->puro_texto  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'psa_total'  => $request->psa_total ,'psa_libre'  => $request->psa_libre ,'psa_relacion'  => $request->psa_relacion ,'tacto_rectal'  => $request->tacto_rectal ,'tex_basico'  => $request->tex_basico ,'anestesia'  => $request->anestesia ,'diametro_long'  => $request->diametro_long ,'diametro_trans'  => $request->diametro_trans ,'diametro_anterop'  => $request->diametro_anterop ,'volumen'  => $request->volumen ,'densidad'  => $request->densidad ,'capsula'  => $request->capsula ,'nodulos'  => $request->nodulos ,'nodulos_ubicacion'  => $request->nodulos_ubicacion ,'nodulos_caracteristicas'  => $request->nodulos_caracteristicas ,'protocolo_biopsia_cilindros_de'  => $request->protocolo_biopsia_cilindros_de ,'protocolo_biopsia_cilindros_iz'  => $request->protocolo_biopsia_cilindros_iz ,'conclusion'  => $request->conclusion ,'medico_1'  => $request->medico_1 ,'medico_2'  => $request->medico_2 ,'equipo'  => $request->equipo ,'trasductor'  => $request->trasductor ,'frecuencia'  => $request->frecuencia ,'diametro_ld'  => $request->diametro_ld ,'diametro_li'  => $request->diametro_li ,'diametro_long_ld'  => $request->diametro_long_ld ,'diametro_long_li'  => $request->diametro_long_li ,'diametro_trans_ld'  => $request->diametro_trans_ld ,'diametro_trans_li'  => $request->diametro_trans_li ,'diametro_anterop_ld'  => $request->diametro_anterop_ld ,'diametro_anterop_li'  => $request->diametro_anterop_li ,'vesiculas_s'  => $request->vesiculas_s ,'puro_texto'  => $request->puro_texto  ] 
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
