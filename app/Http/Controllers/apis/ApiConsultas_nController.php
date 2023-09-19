<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiConsultas_nController extends Controller
{
public $tabla = "consultas_n";
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
[ 'numhistoria'  => $request->numhistoria ,'nroconsulta'  => $request->nroconsulta ,'fecha'  => $request->fecha ,'enfermedadactual'  => $request->enfermedadactual ,'peso'  => $request->peso ,'talla'  => $request->talla ,'fc'  => $request->fc ,'pp'  => $request->pp ,'circcefalica'  => $request->circcefalica ,'circtoraxica'  => $request->circtoraxica ,'circabdominal'  => $request->circabdominal ,'tasentado'  => $request->tasentado ,'taacostado'  => $request->taacostado ,'tapie'  => $request->tapie ,'resultadoexamencomp'  => $request->resultadoexamencomp ,'eliminado'  => $request->eliminado ,'faringe'  => $request->faringe ,'nariz'  => $request->nariz ,'oido'  => $request->oido ,'laringe'  => $request->laringe ,'cuello'  => $request->cuello ,'otros'  => $request->otros ,'evolucion'  => $request->evolucion ,'observaciones'  => $request->observaciones ,'medico'  => $request->medico ,'tem_otica'  => $request->tem_otica ,'tem_oral'  => $request->tem_oral ,'tem_axilar'  => $request->tem_axilar  ] 
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
[ 'numhistoria'  => $request->numhistoria ,'nroconsulta'  => $request->nroconsulta ,'fecha'  => $request->fecha ,'enfermedadactual'  => $request->enfermedadactual ,'peso'  => $request->peso ,'talla'  => $request->talla ,'fc'  => $request->fc ,'pp'  => $request->pp ,'circcefalica'  => $request->circcefalica ,'circtoraxica'  => $request->circtoraxica ,'circabdominal'  => $request->circabdominal ,'tasentado'  => $request->tasentado ,'taacostado'  => $request->taacostado ,'tapie'  => $request->tapie ,'resultadoexamencomp'  => $request->resultadoexamencomp ,'eliminado'  => $request->eliminado ,'faringe'  => $request->faringe ,'nariz'  => $request->nariz ,'oido'  => $request->oido ,'laringe'  => $request->laringe ,'cuello'  => $request->cuello ,'otros'  => $request->otros ,'evolucion'  => $request->evolucion ,'observaciones'  => $request->observaciones ,'medico'  => $request->medico ,'tem_otica'  => $request->tem_otica ,'tem_oral'  => $request->tem_oral ,'tem_axilar'  => $request->tem_axilar  ] 
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
