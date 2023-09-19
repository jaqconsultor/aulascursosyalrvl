<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Pre_natal_observacionesController extends Controller
{
public $tabla = "pre_natal_observaciones";
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
[ 'historia'  => $request->historia ,'fur'  => $request->fur ,'menarquia'  => $request->menarquia ,'gestas'  => $request->gestas ,'parto'  => $request->parto ,'tipiaje'  => $request->tipiaje ,'observaciones'  => $request->observaciones ,'tipiaje_cony'  => $request->tipiaje_cony ,'gesta_clave'  => $request->gesta_clave ,'partos'  => $request->partos ,'cesarea'  => $request->cesarea ,'abortos'  => $request->abortos ,'otros'  => $request->otros ,'final'  => $request->final ,'multiple'  => $request->multiple ,'cantidad'  => $request->cantidad  ] 
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
[ 'historia'  => $request->historia ,'fur'  => $request->fur ,'menarquia'  => $request->menarquia ,'gestas'  => $request->gestas ,'parto'  => $request->parto ,'tipiaje'  => $request->tipiaje ,'observaciones'  => $request->observaciones ,'tipiaje_cony'  => $request->tipiaje_cony ,'gesta_clave'  => $request->gesta_clave ,'partos'  => $request->partos ,'cesarea'  => $request->cesarea ,'abortos'  => $request->abortos ,'otros'  => $request->otros ,'final'  => $request->final ,'multiple'  => $request->multiple ,'cantidad'  => $request->cantidad  ] 
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

