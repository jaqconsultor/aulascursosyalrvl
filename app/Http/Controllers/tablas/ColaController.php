<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class ColaController extends Controller
{
public $tabla = "cola";
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
[ 'fecha'  => $request->fecha ,'numhistoria'  => $request->numhistoria ,'numorden'  => $request->numorden ,'atendido'  => $request->atendido ,'estado'  => $request->estado ,'turno'  => $request->turno ,'motivo'  => $request->motivo ,'monto'  => $request->monto ,'hora_ini'  => $request->hora_ini ,'hora_fin'  => $request->hora_fin ,'tiempo'  => $request->tiempo ,'tipo'  => $request->tipo ,'conse'  => $request->conse ,'medico'  => $request->medico ,'sms'  => $request->sms ,'sms_text'  => $request->sms_text  ] 
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
[ 'fecha'  => $request->fecha ,'numhistoria'  => $request->numhistoria ,'numorden'  => $request->numorden ,'atendido'  => $request->atendido ,'estado'  => $request->estado ,'turno'  => $request->turno ,'motivo'  => $request->motivo ,'monto'  => $request->monto ,'hora_ini'  => $request->hora_ini ,'hora_fin'  => $request->hora_fin ,'tiempo'  => $request->tiempo ,'tipo'  => $request->tipo ,'conse'  => $request->conse ,'medico'  => $request->medico ,'sms'  => $request->sms ,'sms_text'  => $request->sms_text  ] 
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

