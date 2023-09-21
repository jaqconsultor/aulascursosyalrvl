<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class PacientesController extends Controller
{
public $tabla = "pacientes";
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
[ 'nac'  => $request->nac ,'cedula'  => $request->cedula ,'apellidos'  => $request->apellidos ,'nombres'  => $request->nombres ,'sexo'  => $request->sexo ,'fnacimiento'  => $request->fnacimiento ,'lnacimiento'  => $request->lnacimiento ,'codeestado'  => $request->codeestado ,'direccion'  => $request->direccion ,'telefono'  => $request->telefono ,'fingreso'  => $request->fingreso ,'escolaridad'  => $request->escolaridad ,'ocupacion'  => $request->ocupacion ,'codesegemp'  => $request->codesegemp ,'numhistoria'  => $request->numhistoria ,'foto_pac'  => $request->foto_pac ,'profesion'  => $request->profesion ,'email'  => $request->email ,'dependencia'  => $request->dependencia ,'medico'  => $request->medico ,'sms'  => $request->sms  ] 
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
[ 'nac'  => $request->nac ,'cedula'  => $request->cedula ,'apellidos'  => $request->apellidos ,'nombres'  => $request->nombres ,'sexo'  => $request->sexo ,'fnacimiento'  => $request->fnacimiento ,'lnacimiento'  => $request->lnacimiento ,'codeestado'  => $request->codeestado ,'direccion'  => $request->direccion ,'telefono'  => $request->telefono ,'fingreso'  => $request->fingreso ,'escolaridad'  => $request->escolaridad ,'ocupacion'  => $request->ocupacion ,'codesegemp'  => $request->codesegemp ,'numhistoria'  => $request->numhistoria ,'foto_pac'  => $request->foto_pac ,'profesion'  => $request->profesion ,'email'  => $request->email ,'dependencia'  => $request->dependencia ,'medico'  => $request->medico ,'sms'  => $request->sms  ] 
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

