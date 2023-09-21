<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Factura_clienteController extends Controller
{
public $tabla = "factura_cliente";
    public $registro = null;

     public function __construct() { 
        
     }
     
     public function index()
     {
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     public function create()
     {
         return view( 'crud' . $this->tabla.'.create');
     }
 
     public function store(Request $request)
     {
        DB::table($this->tabla)->updateOrInsert(
[ 'numfactura'  => $request->numfactura ,'cedu_rif'  => $request->cedu_rif ,'fecha_factura'  => $request->fecha_factura ,'fecha_vence_fact'  => $request->fecha_vence_fact ,'fecha_cance_fact'  => $request->fecha_cance_fact ,'cliente'  => $request->cliente ,'status_factura'  => $request->status_factura ,'tipo_factura'  => $request->tipo_factura ,'paciente'  => $request->paciente ,'nom_paciente'  => $request->nom_paciente ,'tipo_precio'  => $request->tipo_precio ,'nro_orden'  => $request->nro_orden ,'total_costo'  => $request->total_costo ,'total_neto'  => $request->total_neto ,'total_bruto'  => $request->total_bruto ,'total_final'  => $request->total_final ,'total_descuento'  => $request->total_descuento ,'descuento_linea'  => $request->descuento_linea ,'notas'  => $request->notas ,'hora_documento'  => $request->hora_documento ,'monto_pac'  => $request->monto_pac ,'monto_emp'  => $request->monto_emp ,'numero_consulta'  => $request->numero_consulta ,'numero_historia'  => $request->numero_historia ,'tipo_doc'  => $request->tipo_doc ,'nro_cxp'  => $request->nro_cxp ,'medico'  => $request->medico  ] 
        );
         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function show($id)
     {
        $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
        $registros = $this->registros;
        return view('crud' . $this->tabla . '.show',compact('registros'));
     }
 
     public function edit($id)
     {
         $this->registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         $registros = $this->registros;
         return view('crud' .$this->tabla .'.edit',compact('registros'));
     }
 
     public function update(Request $request, $id)
     {
        
        $affected = DB::table($this->tabla)->where('id', $id)->update(
[ 'numfactura'  => $request->numfactura ,'cedu_rif'  => $request->cedu_rif ,'fecha_factura'  => $request->fecha_factura ,'fecha_vence_fact'  => $request->fecha_vence_fact ,'fecha_cance_fact'  => $request->fecha_cance_fact ,'cliente'  => $request->cliente ,'status_factura'  => $request->status_factura ,'tipo_factura'  => $request->tipo_factura ,'paciente'  => $request->paciente ,'nom_paciente'  => $request->nom_paciente ,'tipo_precio'  => $request->tipo_precio ,'nro_orden'  => $request->nro_orden ,'total_costo'  => $request->total_costo ,'total_neto'  => $request->total_neto ,'total_bruto'  => $request->total_bruto ,'total_final'  => $request->total_final ,'total_descuento'  => $request->total_descuento ,'descuento_linea'  => $request->descuento_linea ,'notas'  => $request->notas ,'hora_documento'  => $request->hora_documento ,'monto_pac'  => $request->monto_pac ,'monto_emp'  => $request->monto_emp ,'numero_consulta'  => $request->numero_consulta ,'numero_historia'  => $request->numero_historia ,'tipo_doc'  => $request->tipo_doc ,'nro_cxp'  => $request->nro_cxp ,'medico'  => $request->medico  ] 
        );

         return redirect()->route(''.$this->tabla.'.index');
     }
 
     public function destroy($id)
     {
        $deleted = DB::table($this->tabla)->where('id', '=', $id)->delete();
        $view ='tablas.crud-'.$this->tabla.'-component';

        return view('layouts.ver-template', [
            'view' => $view
          ]);
     }
 
     
}

