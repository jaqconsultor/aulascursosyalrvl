<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiRegistro_empleados_eje_detalleController extends Controller
{
public $tabla = "registro_empleados_eje_detalle";
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
[ 'nro_nomina'  => $request->nro_nomina ,'nro_empleado'  => $request->nro_empleado ,'nro_cxp'  => $request->nro_cxp ,'monto_empleado'  => $request->monto_empleado  ] 
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
[ 'nro_nomina'  => $request->nro_nomina ,'nro_empleado'  => $request->nro_empleado ,'nro_cxp'  => $request->nro_cxp ,'monto_empleado'  => $request->monto_empleado  ] 
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
