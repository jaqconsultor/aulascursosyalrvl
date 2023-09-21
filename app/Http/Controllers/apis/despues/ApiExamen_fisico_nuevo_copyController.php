<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiExamen_fisico_nuevo_copyController extends Controller
{
public $tabla = "examen_fisico_nuevo_copy";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'talla'  => $request->talla ,'peso'  => $request->peso ,'mamas'  => $request->mamas ,'tiroides'  => $request->tiroides ,'abdomen'  => $request->abdomen ,'extremidades'  => $request->extremidades ,'cardiopulmonar'  => $request->cardiopulmonar ,'genitales_externos'  => $request->genitales_externos ,'especulos'  => $request->especulos ,'tacto_vaginal'  => $request->tacto_vaginal ,'tacto_rectal'  => $request->tacto_rectal ,'colposcopia'  => $request->colposcopia ,'tension'  => $request->tension ,'general'  => $request->general ,'neurologico'  => $request->neurologico ,'mama_derecha'  => $request->mama_derecha ,'total_g'  => $request->total_g ,'total_f'  => $request->total_f ,'total_general'  => $request->total_general  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'talla'  => $request->talla ,'peso'  => $request->peso ,'mamas'  => $request->mamas ,'tiroides'  => $request->tiroides ,'abdomen'  => $request->abdomen ,'extremidades'  => $request->extremidades ,'cardiopulmonar'  => $request->cardiopulmonar ,'genitales_externos'  => $request->genitales_externos ,'especulos'  => $request->especulos ,'tacto_vaginal'  => $request->tacto_vaginal ,'tacto_rectal'  => $request->tacto_rectal ,'colposcopia'  => $request->colposcopia ,'tension'  => $request->tension ,'general'  => $request->general ,'neurologico'  => $request->neurologico ,'mama_derecha'  => $request->mama_derecha ,'total_g'  => $request->total_g ,'total_f'  => $request->total_f ,'total_general'  => $request->total_general  ] 
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
