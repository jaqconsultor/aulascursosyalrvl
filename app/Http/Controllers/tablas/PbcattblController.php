<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class PbcattblController extends Controller
{
public $tabla = "pbcattbl";
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
[ 'pbt_tnam'  => $request->pbt_tnam ,'pbt_tid'  => $request->pbt_tid ,'pbt_ownr'  => $request->pbt_ownr ,'pbd_fhgt'  => $request->pbd_fhgt ,'pbd_fwgt'  => $request->pbd_fwgt ,'pbd_fitl'  => $request->pbd_fitl ,'pbd_funl'  => $request->pbd_funl ,'pbd_fchr'  => $request->pbd_fchr ,'pbd_fptc'  => $request->pbd_fptc ,'pbd_ffce'  => $request->pbd_ffce ,'pbh_fhgt'  => $request->pbh_fhgt ,'pbh_fwgt'  => $request->pbh_fwgt ,'pbh_fitl'  => $request->pbh_fitl ,'pbh_funl'  => $request->pbh_funl ,'pbh_fchr'  => $request->pbh_fchr ,'pbh_fptc'  => $request->pbh_fptc ,'pbh_ffce'  => $request->pbh_ffce ,'pbl_fhgt'  => $request->pbl_fhgt ,'pbl_fwgt'  => $request->pbl_fwgt ,'pbl_fitl'  => $request->pbl_fitl ,'pbl_funl'  => $request->pbl_funl ,'pbl_fchr'  => $request->pbl_fchr ,'pbl_fptc'  => $request->pbl_fptc ,'pbl_ffce'  => $request->pbl_ffce ,'pbt_cmnt'  => $request->pbt_cmnt  ] 
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
[ 'pbt_tnam'  => $request->pbt_tnam ,'pbt_tid'  => $request->pbt_tid ,'pbt_ownr'  => $request->pbt_ownr ,'pbd_fhgt'  => $request->pbd_fhgt ,'pbd_fwgt'  => $request->pbd_fwgt ,'pbd_fitl'  => $request->pbd_fitl ,'pbd_funl'  => $request->pbd_funl ,'pbd_fchr'  => $request->pbd_fchr ,'pbd_fptc'  => $request->pbd_fptc ,'pbd_ffce'  => $request->pbd_ffce ,'pbh_fhgt'  => $request->pbh_fhgt ,'pbh_fwgt'  => $request->pbh_fwgt ,'pbh_fitl'  => $request->pbh_fitl ,'pbh_funl'  => $request->pbh_funl ,'pbh_fchr'  => $request->pbh_fchr ,'pbh_fptc'  => $request->pbh_fptc ,'pbh_ffce'  => $request->pbh_ffce ,'pbl_fhgt'  => $request->pbl_fhgt ,'pbl_fwgt'  => $request->pbl_fwgt ,'pbl_fitl'  => $request->pbl_fitl ,'pbl_funl'  => $request->pbl_funl ,'pbl_fchr'  => $request->pbl_fchr ,'pbl_fptc'  => $request->pbl_fptc ,'pbl_ffce'  => $request->pbl_ffce ,'pbt_cmnt'  => $request->pbt_cmnt  ] 
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

