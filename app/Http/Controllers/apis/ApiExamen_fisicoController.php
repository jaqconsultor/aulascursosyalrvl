<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiExamen_fisicoController extends Controller
{
public $tabla = "examen_fisico";
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
[ 'nrohistoria'  => $request->nrohistoria ,'nroconsulta'  => $request->nroconsulta ,'cardiopulmonal'  => $request->cardiopulmonal ,'abdomen'  => $request->abdomen ,'extremidades'  => $request->extremidades ,'otros'  => $request->otros ,'electrocardiograma'  => $request->electrocardiograma ,'rx_de_torax'  => $request->rx_de_torax ,'laboratorio'  => $request->laboratorio ,'riesgo_operatorio'  => $request->riesgo_operatorio ,'sugerencias'  => $request->sugerencias  ] 
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
[ 'nrohistoria'  => $request->nrohistoria ,'nroconsulta'  => $request->nroconsulta ,'cardiopulmonal'  => $request->cardiopulmonal ,'abdomen'  => $request->abdomen ,'extremidades'  => $request->extremidades ,'otros'  => $request->otros ,'electrocardiograma'  => $request->electrocardiograma ,'rx_de_torax'  => $request->rx_de_torax ,'laboratorio'  => $request->laboratorio ,'riesgo_operatorio'  => $request->riesgo_operatorio ,'sugerencias'  => $request->sugerencias  ] 
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
