<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiRegistro_empleados_ejeController extends Controller
{
public $tabla = "registro_empleados_eje";
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
[ 'nro_nomina'  => $request->nro_nomina ,'descripcion'  => $request->descripcion ,'fecha_aplicacion'  => $request->fecha_aplicacion ,'status'  => $request->status ,'tipo_nomina'  => $request->tipo_nomina ,'frecuencia_nomina'  => $request->frecuencia_nomina ,'monto_total'  => $request->monto_total  ] 
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
[ 'nro_nomina'  => $request->nro_nomina ,'descripcion'  => $request->descripcion ,'fecha_aplicacion'  => $request->fecha_aplicacion ,'status'  => $request->status ,'tipo_nomina'  => $request->tipo_nomina ,'frecuencia_nomina'  => $request->frecuencia_nomina ,'monto_total'  => $request->monto_total  ] 
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
