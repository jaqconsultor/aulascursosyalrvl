<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiVademecum_mController extends Controller
{
public $tabla = "vademecum_m";
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
[ 'codemedicina'  => $request->codemedicina ,'nombregenerico'  => $request->nombregenerico ,'nombrecomercial'  => $request->nombrecomercial ,'dosificacion'  => $request->dosificacion ,'uso'  => $request->uso ,'presentacion'  => $request->presentacion ,'concentracion'  => $request->concentracion ,'cada'  => $request->cada ,'durante'  => $request->durante ,'pvc'  => $request->pvc ,'pvs'  => $request->pvs ,'dosis'  => $request->dosis ,'sico'  => $request->sico ,'nombrecomercial1'  => $request->nombrecomercial1 ,'nombrecomercial2'  => $request->nombrecomercial2 ,'nombrecomercial3'  => $request->nombrecomercial3 ,'totalre'  => $request->totalre ,'sicome'  => $request->sicome ,'sicome1'  => $request->sicome1 ,'sicome2'  => $request->sicome2 ,'sicome3'  => $request->sicome3  ] 
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
[ 'codemedicina'  => $request->codemedicina ,'nombregenerico'  => $request->nombregenerico ,'nombrecomercial'  => $request->nombrecomercial ,'dosificacion'  => $request->dosificacion ,'uso'  => $request->uso ,'presentacion'  => $request->presentacion ,'concentracion'  => $request->concentracion ,'cada'  => $request->cada ,'durante'  => $request->durante ,'pvc'  => $request->pvc ,'pvs'  => $request->pvs ,'dosis'  => $request->dosis ,'sico'  => $request->sico ,'nombrecomercial1'  => $request->nombrecomercial1 ,'nombrecomercial2'  => $request->nombrecomercial2 ,'nombrecomercial3'  => $request->nombrecomercial3 ,'totalre'  => $request->totalre ,'sicome'  => $request->sicome ,'sicome1'  => $request->sicome1 ,'sicome2'  => $request->sicome2 ,'sicome3'  => $request->sicome3  ] 
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
