<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiFactura_clienteController extends Controller
{
public $tabla = "factura_cliente";
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
[ 'numfactura'  => $request->numfactura ,'cedu_rif'  => $request->cedu_rif ,'fecha_factura'  => $request->fecha_factura ,'fecha_vence_fact'  => $request->fecha_vence_fact ,'fecha_cance_fact'  => $request->fecha_cance_fact ,'cliente'  => $request->cliente ,'status_factura'  => $request->status_factura ,'tipo_factura'  => $request->tipo_factura ,'paciente'  => $request->paciente ,'nom_paciente'  => $request->nom_paciente ,'tipo_precio'  => $request->tipo_precio ,'nro_orden'  => $request->nro_orden ,'total_costo'  => $request->total_costo ,'total_neto'  => $request->total_neto ,'total_bruto'  => $request->total_bruto ,'total_final'  => $request->total_final ,'total_descuento'  => $request->total_descuento ,'descuento_linea'  => $request->descuento_linea ,'notas'  => $request->notas ,'hora_documento'  => $request->hora_documento ,'monto_pac'  => $request->monto_pac ,'monto_emp'  => $request->monto_emp ,'numero_consulta'  => $request->numero_consulta ,'numero_historia'  => $request->numero_historia ,'tipo_doc'  => $request->tipo_doc ,'nro_cxp'  => $request->nro_cxp ,'medico'  => $request->medico  ] 
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
[ 'numfactura'  => $request->numfactura ,'cedu_rif'  => $request->cedu_rif ,'fecha_factura'  => $request->fecha_factura ,'fecha_vence_fact'  => $request->fecha_vence_fact ,'fecha_cance_fact'  => $request->fecha_cance_fact ,'cliente'  => $request->cliente ,'status_factura'  => $request->status_factura ,'tipo_factura'  => $request->tipo_factura ,'paciente'  => $request->paciente ,'nom_paciente'  => $request->nom_paciente ,'tipo_precio'  => $request->tipo_precio ,'nro_orden'  => $request->nro_orden ,'total_costo'  => $request->total_costo ,'total_neto'  => $request->total_neto ,'total_bruto'  => $request->total_bruto ,'total_final'  => $request->total_final ,'total_descuento'  => $request->total_descuento ,'descuento_linea'  => $request->descuento_linea ,'notas'  => $request->notas ,'hora_documento'  => $request->hora_documento ,'monto_pac'  => $request->monto_pac ,'monto_emp'  => $request->monto_emp ,'numero_consulta'  => $request->numero_consulta ,'numero_historia'  => $request->numero_historia ,'tipo_doc'  => $request->tipo_doc ,'nro_cxp'  => $request->nro_cxp ,'medico'  => $request->medico  ] 
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
