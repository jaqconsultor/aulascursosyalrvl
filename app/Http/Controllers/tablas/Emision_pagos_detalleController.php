<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Emision_pagos_detalleController extends Controller
{
public $tabla = "emision_pagos_detalle";
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
[ 'nro_registro'  => $request->nro_registro ,'nro_emision'  => $request->nro_emision ,'nro_cxp'  => $request->nro_cxp ,'nro_mov'  => $request->nro_mov ,'origen_cxp'  => $request->origen_cxp ,'cxp_codigo'  => $request->cxp_codigo ,'cxp_descripcion'  => $request->cxp_descripcion ,'fecha_emision'  => $request->fecha_emision ,'nro_documento'  => $request->nro_documento ,'tip_documento'  => $request->tip_documento ,'saldo_pagar'  => $request->saldo_pagar ,'monto_pagar'  => $request->monto_pagar ,'estado'  => $request->estado  ] 
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
[ 'nro_registro'  => $request->nro_registro ,'nro_emision'  => $request->nro_emision ,'nro_cxp'  => $request->nro_cxp ,'nro_mov'  => $request->nro_mov ,'origen_cxp'  => $request->origen_cxp ,'cxp_codigo'  => $request->cxp_codigo ,'cxp_descripcion'  => $request->cxp_descripcion ,'fecha_emision'  => $request->fecha_emision ,'nro_documento'  => $request->nro_documento ,'tip_documento'  => $request->tip_documento ,'saldo_pagar'  => $request->saldo_pagar ,'monto_pagar'  => $request->monto_pagar ,'estado'  => $request->estado  ] 
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

