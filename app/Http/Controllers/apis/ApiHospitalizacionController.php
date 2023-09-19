<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiHospitalizacionController extends Controller
{
public $tabla = "hospitalizacion";
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
[ 'nrohistoria'  => $request->nrohistoria ,'nroconsulta'  => $request->nroconsulta ,'diagprev'  => $request->diagprev ,'indiprev'  => $request->indiprev ,'dieta'  => $request->dieta ,'habitacion'  => $request->habitacion ,'hospital'  => $request->hospital  ] 
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
[ 'nrohistoria'  => $request->nrohistoria ,'nroconsulta'  => $request->nroconsulta ,'diagprev'  => $request->diagprev ,'indiprev'  => $request->indiprev ,'dieta'  => $request->dieta ,'habitacion'  => $request->habitacion ,'hospital'  => $request->hospital  ] 
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
