<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Cuentas_x_pagarController extends Controller
{
public $tabla = "cuentas_x_pagar";
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
[ 'nro_cxp'  => $request->nro_cxp ,'origen_cxp'  => $request->origen_cxp ,'fec_cxp'  => $request->fec_cxp ,'edo_cxp'  => $request->edo_cxp ,'tipo_cxp'  => $request->tipo_cxp ,'conc_cxp'  => $request->conc_cxp ,'cxp_codigo'  => $request->cxp_codigo ,'cxp_descripcion'  => $request->cxp_descripcion ,'fec_docum'  => $request->fec_docum ,'cxp_nro_control'  => $request->cxp_nro_control ,'cxp_nro_factura'  => $request->cxp_nro_factura ,'cxp_referencia'  => $request->cxp_referencia ,'cxp_mto_neto'  => $request->cxp_mto_neto ,'cxp_ret_isrl'  => $request->cxp_ret_isrl ,'cxp_m_ret_isrl'  => $request->cxp_m_ret_isrl ,'cxp_iva'  => $request->cxp_iva ,'cxp_mto_iva'  => $request->cxp_mto_iva ,'cxp_mto_total'  => $request->cxp_mto_total ,'cxp_ret_iva'  => $request->cxp_ret_iva ,'cxp_m_ret_iva'  => $request->cxp_m_ret_iva ,'cxp_mto_total_pagar'  => $request->cxp_mto_total_pagar ,'cxp_saldo_a_pagar'  => $request->cxp_saldo_a_pagar ,'cxp_chekear'  => $request->cxp_chekear ,'cxp_forma'  => $request->cxp_forma  ] 
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
[ 'nro_cxp'  => $request->nro_cxp ,'origen_cxp'  => $request->origen_cxp ,'fec_cxp'  => $request->fec_cxp ,'edo_cxp'  => $request->edo_cxp ,'tipo_cxp'  => $request->tipo_cxp ,'conc_cxp'  => $request->conc_cxp ,'cxp_codigo'  => $request->cxp_codigo ,'cxp_descripcion'  => $request->cxp_descripcion ,'fec_docum'  => $request->fec_docum ,'cxp_nro_control'  => $request->cxp_nro_control ,'cxp_nro_factura'  => $request->cxp_nro_factura ,'cxp_referencia'  => $request->cxp_referencia ,'cxp_mto_neto'  => $request->cxp_mto_neto ,'cxp_ret_isrl'  => $request->cxp_ret_isrl ,'cxp_m_ret_isrl'  => $request->cxp_m_ret_isrl ,'cxp_iva'  => $request->cxp_iva ,'cxp_mto_iva'  => $request->cxp_mto_iva ,'cxp_mto_total'  => $request->cxp_mto_total ,'cxp_ret_iva'  => $request->cxp_ret_iva ,'cxp_m_ret_iva'  => $request->cxp_m_ret_iva ,'cxp_mto_total_pagar'  => $request->cxp_mto_total_pagar ,'cxp_saldo_a_pagar'  => $request->cxp_saldo_a_pagar ,'cxp_chekear'  => $request->cxp_chekear ,'cxp_forma'  => $request->cxp_forma  ] 
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

