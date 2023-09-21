<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiDoctoresController extends Controller
{
public $tabla = "doctores";
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
[ 'cedula'  => $request->cedula ,'apellidos'  => $request->apellidos ,'nombres'  => $request->nombres ,'clinica'  => $request->clinica ,'direccion'  => $request->direccion ,'telefono'  => $request->telefono ,'ciudad'  => $request->ciudad ,'nota'  => $request->nota ,'codeespecial'  => $request->codeespecial  ] 
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
[ 'cedula'  => $request->cedula ,'apellidos'  => $request->apellidos ,'nombres'  => $request->nombres ,'clinica'  => $request->clinica ,'direccion'  => $request->direccion ,'telefono'  => $request->telefono ,'ciudad'  => $request->ciudad ,'nota'  => $request->nota ,'codeespecial'  => $request->codeespecial  ] 
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
