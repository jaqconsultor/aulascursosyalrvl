<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiEco_pelvico_cController extends Controller
{
public $tabla = "eco_pelvico_c";
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
[ 'numhistoria'  => $request->numhistoria ,'fecha'  => $request->fecha ,'posicionavf'  => $request->posicionavf ,'centrar'  => $request->centrar ,'patron'  => $request->patron ,'cuerpo'  => $request->cuerpo ,'antero'  => $request->antero ,'transverso'  => $request->transverso ,'cuello'  => $request->cuello ,'anterocuello'  => $request->anterocuello ,'espesor'  => $request->espesor ,'linea'  => $request->linea ,'observacion'  => $request->observacion ,'nroconsulta'  => $request->nroconsulta ,'ovarioderlong'  => $request->ovarioderlong ,'ovarioderap'  => $request->ovarioderap ,'ovariodertras'  => $request->ovariodertras ,'ovarioizqlong'  => $request->ovarioizqlong ,'ovarioizqap'  => $request->ovarioizqap ,'ovarioizqtras'  => $request->ovarioizqtras ,'fondosacolibre'  => $request->fondosacolibre ,'fondosacootro'  => $request->fondosacootro ,'idxecografico'  => $request->idxecografico ,'sugerencias'  => $request->sugerencias ,'formautero'  => $request->formautero ,'observacionovario'  => $request->observacionovario ,'bordeutero'  => $request->bordeutero ,'fur'  => $request->fur ,'gesta'  => $request->gesta ,'trans_convex'  => $request->trans_convex ,'trans_transvaginal'  => $request->trans_transvaginal ,'vagina'  => $request->vagina ,'volumen_der'  => $request->volumen_der ,'volumen_izq'  => $request->volumen_izq  ] 
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
[ 'numhistoria'  => $request->numhistoria ,'fecha'  => $request->fecha ,'posicionavf'  => $request->posicionavf ,'centrar'  => $request->centrar ,'patron'  => $request->patron ,'cuerpo'  => $request->cuerpo ,'antero'  => $request->antero ,'transverso'  => $request->transverso ,'cuello'  => $request->cuello ,'anterocuello'  => $request->anterocuello ,'espesor'  => $request->espesor ,'linea'  => $request->linea ,'observacion'  => $request->observacion ,'nroconsulta'  => $request->nroconsulta ,'ovarioderlong'  => $request->ovarioderlong ,'ovarioderap'  => $request->ovarioderap ,'ovariodertras'  => $request->ovariodertras ,'ovarioizqlong'  => $request->ovarioizqlong ,'ovarioizqap'  => $request->ovarioizqap ,'ovarioizqtras'  => $request->ovarioizqtras ,'fondosacolibre'  => $request->fondosacolibre ,'fondosacootro'  => $request->fondosacootro ,'idxecografico'  => $request->idxecografico ,'sugerencias'  => $request->sugerencias ,'formautero'  => $request->formautero ,'observacionovario'  => $request->observacionovario ,'bordeutero'  => $request->bordeutero ,'fur'  => $request->fur ,'gesta'  => $request->gesta ,'trans_convex'  => $request->trans_convex ,'trans_transvaginal'  => $request->trans_transvaginal ,'vagina'  => $request->vagina ,'volumen_der'  => $request->volumen_der ,'volumen_izq'  => $request->volumen_izq  ] 
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
