<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiVacunas_movimientoController extends Controller
{
public $tabla = "vacunas_movimiento";
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
[ 'vacuna'  => $request->vacuna ,'historia'  => $request->historia ,'consulta'  => $request->consulta ,'dosis'  => $request->dosis ,'fecha'  => $request->fecha ,'descri_vacuna'  => $request->descri_vacuna ,'descri_paciente'  => $request->descri_paciente ,'empresa'  => $request->empresa ,'disponible'  => $request->disponible ,'precio'  => $request->precio  ] 
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
[ 'vacuna'  => $request->vacuna ,'historia'  => $request->historia ,'consulta'  => $request->consulta ,'dosis'  => $request->dosis ,'fecha'  => $request->fecha ,'descri_vacuna'  => $request->descri_vacuna ,'descri_paciente'  => $request->descri_paciente ,'empresa'  => $request->empresa ,'disponible'  => $request->disponible ,'precio'  => $request->precio  ] 
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
