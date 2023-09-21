<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPaciente_no_regiController extends Controller
{
public $tabla = "paciente_no_regi";
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
[ 'registro'  => $request->registro ,'apellidos'  => $request->apellidos ,'nombres'  => $request->nombres ,'celular'  => $request->celular ,'motivo'  => $request->motivo ,'fecha'  => $request->fecha ,'medico'  => $request->medico ,'registrado'  => $request->registrado ,'hora'  => $request->hora  ] 
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
[ 'registro'  => $request->registro ,'apellidos'  => $request->apellidos ,'nombres'  => $request->nombres ,'celular'  => $request->celular ,'motivo'  => $request->motivo ,'fecha'  => $request->fecha ,'medico'  => $request->medico ,'registrado'  => $request->registrado ,'hora'  => $request->hora  ] 
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
