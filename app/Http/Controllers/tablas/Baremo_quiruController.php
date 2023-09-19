<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Baremo_quiruController extends Controller
{
public $tabla = "baremo_quiru";
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
[ 'consecuti'  => $request->consecuti ,'cod_inter'  => $request->cod_inter ,'cod_clini'  => $request->cod_clini ,'ced_paciente'  => $request->ced_paciente ,'nom_interven'  => $request->nom_interven ,'nom_paciente'  => $request->nom_paciente ,'fecha_creado'  => $request->fecha_creado ,'fecha_opera'  => $request->fecha_opera ,'hora_opera'  => $request->hora_opera ,'monto_opera'  => $request->monto_opera ,'tipo_rol'  => $request->tipo_rol ,'pagada'  => $request->pagada ,'medico_prin'  => $request->medico_prin ,'medico_aux'  => $request->medico_aux ,'historia'  => $request->historia ,'diagnostico'  => $request->diagnostico ,'monto_abono'  => $request->monto_abono ,'monto_resta'  => $request->monto_resta ,'empre'  => $request->empre ,'hora_fin'  => $request->hora_fin ,'duracion'  => $request->duracion  ] 
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
[ 'consecuti'  => $request->consecuti ,'cod_inter'  => $request->cod_inter ,'cod_clini'  => $request->cod_clini ,'ced_paciente'  => $request->ced_paciente ,'nom_interven'  => $request->nom_interven ,'nom_paciente'  => $request->nom_paciente ,'fecha_creado'  => $request->fecha_creado ,'fecha_opera'  => $request->fecha_opera ,'hora_opera'  => $request->hora_opera ,'monto_opera'  => $request->monto_opera ,'tipo_rol'  => $request->tipo_rol ,'pagada'  => $request->pagada ,'medico_prin'  => $request->medico_prin ,'medico_aux'  => $request->medico_aux ,'historia'  => $request->historia ,'diagnostico'  => $request->diagnostico ,'monto_abono'  => $request->monto_abono ,'monto_resta'  => $request->monto_resta ,'empre'  => $request->empre ,'hora_fin'  => $request->hora_fin ,'duracion'  => $request->duracion  ] 
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

