<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiSms_enviadosController extends Controller
{
public $tabla = "sms_enviados";
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
[ 'conta'  => $request->conta ,'usuario'  => $request->usuario ,'medico'  => $request->medico ,'proveedor'  => $request->proveedor ,'numero'  => $request->numero ,'mensaje'  => $request->mensaje ,'fecha'  => $request->fecha ,'tipo'  => $request->tipo ,'historia'  => $request->historia ,'consulta'  => $request->consulta  ] 
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
[ 'conta'  => $request->conta ,'usuario'  => $request->usuario ,'medico'  => $request->medico ,'proveedor'  => $request->proveedor ,'numero'  => $request->numero ,'mensaje'  => $request->mensaje ,'fecha'  => $request->fecha ,'tipo'  => $request->tipo ,'historia'  => $request->historia ,'consulta'  => $request->consulta  ] 
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
