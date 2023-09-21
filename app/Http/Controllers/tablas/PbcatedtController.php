<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class PbcatedtController extends Controller
{
public $tabla = "pbcatedt";
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
[ 'pbe_name'  => $request->pbe_name ,'pbe_edit'  => $request->pbe_edit ,'pbe_type'  => $request->pbe_type ,'pbe_cntr'  => $request->pbe_cntr ,'pbe_seqn'  => $request->pbe_seqn ,'pbe_flag'  => $request->pbe_flag ,'pbe_work'  => $request->pbe_work  ] 
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
[ 'pbe_name'  => $request->pbe_name ,'pbe_edit'  => $request->pbe_edit ,'pbe_type'  => $request->pbe_type ,'pbe_cntr'  => $request->pbe_cntr ,'pbe_seqn'  => $request->pbe_seqn ,'pbe_flag'  => $request->pbe_flag ,'pbe_work'  => $request->pbe_work  ] 
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

