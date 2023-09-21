<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Cuentas_x_pagar_movController extends Controller
{
public $tabla = "cuentas_x_pagar_mov";
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
[ 'nro_registro'  => $request->nro_registro ,'nro_cxp'  => $request->nro_cxp ,'nro_mov'  => $request->nro_mov ,'fecha_emision'  => $request->fecha_emision ,'nro_documento'  => $request->nro_documento ,'tip_documento'  => $request->tip_documento ,'monto_pagar'  => $request->monto_pagar  ] 
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
[ 'nro_registro'  => $request->nro_registro ,'nro_cxp'  => $request->nro_cxp ,'nro_mov'  => $request->nro_mov ,'fecha_emision'  => $request->fecha_emision ,'nro_documento'  => $request->nro_documento ,'tip_documento'  => $request->tip_documento ,'monto_pagar'  => $request->monto_pagar  ] 
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

