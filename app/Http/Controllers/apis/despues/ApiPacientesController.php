<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPacientesController extends Controller
{
public $tabla = "pacientes";
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
[ 'nac'  => $request->nac ,'cedula'  => $request->cedula ,'apellidos'  => $request->apellidos ,'nombres'  => $request->nombres ,'sexo'  => $request->sexo ,'fnacimiento'  => $request->fnacimiento ,'lnacimiento'  => $request->lnacimiento ,'codeestado'  => $request->codeestado ,'direccion'  => $request->direccion ,'telefono'  => $request->telefono ,'fingreso'  => $request->fingreso ,'escolaridad'  => $request->escolaridad ,'ocupacion'  => $request->ocupacion ,'codesegemp'  => $request->codesegemp ,'numhistoria'  => $request->numhistoria ,'foto_pac'  => $request->foto_pac ,'profesion'  => $request->profesion ,'email'  => $request->email ,'dependencia'  => $request->dependencia ,'medico'  => $request->medico ,'sms'  => $request->sms  ] 
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
[ 'nac'  => $request->nac ,'cedula'  => $request->cedula ,'apellidos'  => $request->apellidos ,'nombres'  => $request->nombres ,'sexo'  => $request->sexo ,'fnacimiento'  => $request->fnacimiento ,'lnacimiento'  => $request->lnacimiento ,'codeestado'  => $request->codeestado ,'direccion'  => $request->direccion ,'telefono'  => $request->telefono ,'fingreso'  => $request->fingreso ,'escolaridad'  => $request->escolaridad ,'ocupacion'  => $request->ocupacion ,'codesegemp'  => $request->codesegemp ,'numhistoria'  => $request->numhistoria ,'foto_pac'  => $request->foto_pac ,'profesion'  => $request->profesion ,'email'  => $request->email ,'dependencia'  => $request->dependencia ,'medico'  => $request->medico ,'sms'  => $request->sms  ] 
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
