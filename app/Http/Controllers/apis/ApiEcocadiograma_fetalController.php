<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiEcocadiograma_fetalController extends Controller
{
public $tabla = "ecocadiograma_fetal";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'biome_dbp'  => $request->biome_dbp ,'biome_dof'  => $request->biome_dof ,'biome_cc'  => $request->biome_cc ,'biome_relacion'  => $request->biome_relacion ,'biome_cardiaca'  => $request->biome_cardiaca ,'biome_toraxica'  => $request->biome_toraxica ,'biome_ca'  => $request->biome_ca ,'biome_humero'  => $request->biome_humero ,'biome_femur'  => $request->biome_femur ,'biome_saco'  => $request->biome_saco ,'anatomi_datos'  => $request->anatomi_datos ,'pla_funi_placenta'  => $request->pla_funi_placenta ,'pla_funi_grado'  => $request->pla_funi_grado ,'pla_funi_grosor'  => $request->pla_funi_grosor ,'pla_funi_cordon_umb'  => $request->pla_funi_cordon_umb ,'pla_funi_liquido_anm'  => $request->pla_funi_liquido_anm ,'pla_funi_pef'  => $request->pla_funi_pef ,'pla_funi_sexo'  => $request->pla_funi_sexo ,'conclusion'  => $request->conclusion ,'sugerencia'  => $request->sugerencia ,'fecha'  => $request->fecha ,'gesta'  => $request->gesta ,'cesarea'  => $request->cesarea ,'parto'  => $request->parto ,'aborto'  => $request->aborto ,'otros'  => $request->otros ,'fur'  => $request->fur ,'eg'  => $request->eg ,'referido'  => $request->referido ,'texto_inicio'  => $request->texto_inicio  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'biome_dbp'  => $request->biome_dbp ,'biome_dof'  => $request->biome_dof ,'biome_cc'  => $request->biome_cc ,'biome_relacion'  => $request->biome_relacion ,'biome_cardiaca'  => $request->biome_cardiaca ,'biome_toraxica'  => $request->biome_toraxica ,'biome_ca'  => $request->biome_ca ,'biome_humero'  => $request->biome_humero ,'biome_femur'  => $request->biome_femur ,'biome_saco'  => $request->biome_saco ,'anatomi_datos'  => $request->anatomi_datos ,'pla_funi_placenta'  => $request->pla_funi_placenta ,'pla_funi_grado'  => $request->pla_funi_grado ,'pla_funi_grosor'  => $request->pla_funi_grosor ,'pla_funi_cordon_umb'  => $request->pla_funi_cordon_umb ,'pla_funi_liquido_anm'  => $request->pla_funi_liquido_anm ,'pla_funi_pef'  => $request->pla_funi_pef ,'pla_funi_sexo'  => $request->pla_funi_sexo ,'conclusion'  => $request->conclusion ,'sugerencia'  => $request->sugerencia ,'fecha'  => $request->fecha ,'gesta'  => $request->gesta ,'cesarea'  => $request->cesarea ,'parto'  => $request->parto ,'aborto'  => $request->aborto ,'otros'  => $request->otros ,'fur'  => $request->fur ,'eg'  => $request->eg ,'referido'  => $request->referido ,'texto_inicio'  => $request->texto_inicio  ] 
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
