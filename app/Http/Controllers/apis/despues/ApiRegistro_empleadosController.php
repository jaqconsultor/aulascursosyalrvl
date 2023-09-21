<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiRegistro_empleadosController extends Controller
{
public $tabla = "registro_empleados";
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
[ 'nro_empleado'  => $request->nro_empleado ,'fecha_creacion'  => $request->fecha_creacion ,'status'  => $request->status ,'cedula_empleado'  => $request->cedula_empleado ,'nombre_empleado'  => $request->nombre_empleado ,'tipo_nomina'  => $request->tipo_nomina ,'frecuencia_nomina'  => $request->frecuencia_nomina ,'monto_s1'  => $request->monto_s1 ,'monto_s2'  => $request->monto_s2 ,'monto_s3'  => $request->monto_s3 ,'monto_s4'  => $request->monto_s4 ,'monto_total'  => $request->monto_total  ] 
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
[ 'nro_empleado'  => $request->nro_empleado ,'fecha_creacion'  => $request->fecha_creacion ,'status'  => $request->status ,'cedula_empleado'  => $request->cedula_empleado ,'nombre_empleado'  => $request->nombre_empleado ,'tipo_nomina'  => $request->tipo_nomina ,'frecuencia_nomina'  => $request->frecuencia_nomina ,'monto_s1'  => $request->monto_s1 ,'monto_s2'  => $request->monto_s2 ,'monto_s3'  => $request->monto_s3 ,'monto_s4'  => $request->monto_s4 ,'monto_total'  => $request->monto_total  ] 
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
