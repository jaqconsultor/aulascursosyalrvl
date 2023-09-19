<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiDetalles_factura_cliente_copyController extends Controller
{
public $tabla = "detalles_factura_cliente_copy";
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
[ 'cod_inventario'  => $request->cod_inventario ,'numfactura'  => $request->numfactura ,'tipo_articulo'  => $request->tipo_articulo ,'nombre'  => $request->nombre ,'precio'  => $request->precio ,'descuento'  => $request->descuento ,'cantidad'  => $request->cantidad ,'fecha_doc'  => $request->fecha_doc ,'tipo_precio'  => $request->tipo_precio ,'total_articulo'  => $request->total_articulo ,'medico'  => $request->medico ,'estatus'  => $request->estatus  ] 
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
[ 'cod_inventario'  => $request->cod_inventario ,'numfactura'  => $request->numfactura ,'tipo_articulo'  => $request->tipo_articulo ,'nombre'  => $request->nombre ,'precio'  => $request->precio ,'descuento'  => $request->descuento ,'cantidad'  => $request->cantidad ,'fecha_doc'  => $request->fecha_doc ,'tipo_precio'  => $request->tipo_precio ,'total_articulo'  => $request->total_articulo ,'medico'  => $request->medico ,'estatus'  => $request->estatus  ] 
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
