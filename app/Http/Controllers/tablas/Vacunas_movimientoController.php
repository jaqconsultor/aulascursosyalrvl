<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Vacunas_movimientoController extends Controller
{
public $tabla = "vacunas_movimiento";
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
[ 'vacuna'  => $request->vacuna ,'historia'  => $request->historia ,'consulta'  => $request->consulta ,'dosis'  => $request->dosis ,'fecha'  => $request->fecha ,'descri_vacuna'  => $request->descri_vacuna ,'descri_paciente'  => $request->descri_paciente ,'empresa'  => $request->empresa ,'disponible'  => $request->disponible ,'precio'  => $request->precio  ] 
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
[ 'vacuna'  => $request->vacuna ,'historia'  => $request->historia ,'consulta'  => $request->consulta ,'dosis'  => $request->dosis ,'fecha'  => $request->fecha ,'descri_vacuna'  => $request->descri_vacuna ,'descri_paciente'  => $request->descri_paciente ,'empresa'  => $request->empresa ,'disponible'  => $request->disponible ,'precio'  => $request->precio  ] 
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

