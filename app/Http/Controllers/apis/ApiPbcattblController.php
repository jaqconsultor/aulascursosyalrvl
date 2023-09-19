<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPbcattblController extends Controller
{
public $tabla = "pbcattbl";
    public $registro = null;

     public function __construct() { 
        
     }
     
      public function index()
      {
 
         $registros = DB::table($this->tabla)->get();
 
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
 
      }
  
      public function store(Request $request)
      {
         $registros = DB::table($this->tabla)->updateOrInsert(
[ 'pbt_tnam'  => $request->pbt_tnam ,'pbt_tid'  => $request->pbt_tid ,'pbt_ownr'  => $request->pbt_ownr ,'pbd_fhgt'  => $request->pbd_fhgt ,'pbd_fwgt'  => $request->pbd_fwgt ,'pbd_fitl'  => $request->pbd_fitl ,'pbd_funl'  => $request->pbd_funl ,'pbd_fchr'  => $request->pbd_fchr ,'pbd_fptc'  => $request->pbd_fptc ,'pbd_ffce'  => $request->pbd_ffce ,'pbh_fhgt'  => $request->pbh_fhgt ,'pbh_fwgt'  => $request->pbh_fwgt ,'pbh_fitl'  => $request->pbh_fitl ,'pbh_funl'  => $request->pbh_funl ,'pbh_fchr'  => $request->pbh_fchr ,'pbh_fptc'  => $request->pbh_fptc ,'pbh_ffce'  => $request->pbh_ffce ,'pbl_fhgt'  => $request->pbl_fhgt ,'pbl_fwgt'  => $request->pbl_fwgt ,'pbl_fitl'  => $request->pbl_fitl ,'pbl_funl'  => $request->pbl_funl ,'pbl_fchr'  => $request->pbl_fchr ,'pbl_fptc'  => $request->pbl_fptc ,'pbl_ffce'  => $request->pbl_ffce ,'pbt_cmnt'  => $request->pbt_cmnt  ] 
         );
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
 
     }
  
      public function show($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
      }
  
      public function edit($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->get();
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
      }
  
      public function update(Request $request, $id)
      {
         $registros = DB::table($this->tabla)->where('id', $id)->update(
[ 'pbt_tnam'  => $request->pbt_tnam ,'pbt_tid'  => $request->pbt_tid ,'pbt_ownr'  => $request->pbt_ownr ,'pbd_fhgt'  => $request->pbd_fhgt ,'pbd_fwgt'  => $request->pbd_fwgt ,'pbd_fitl'  => $request->pbd_fitl ,'pbd_funl'  => $request->pbd_funl ,'pbd_fchr'  => $request->pbd_fchr ,'pbd_fptc'  => $request->pbd_fptc ,'pbd_ffce'  => $request->pbd_ffce ,'pbh_fhgt'  => $request->pbh_fhgt ,'pbh_fwgt'  => $request->pbh_fwgt ,'pbh_fitl'  => $request->pbh_fitl ,'pbh_funl'  => $request->pbh_funl ,'pbh_fchr'  => $request->pbh_fchr ,'pbh_fptc'  => $request->pbh_fptc ,'pbh_ffce'  => $request->pbh_ffce ,'pbl_fhgt'  => $request->pbl_fhgt ,'pbl_fwgt'  => $request->pbl_fwgt ,'pbl_fitl'  => $request->pbl_fitl ,'pbl_funl'  => $request->pbl_funl ,'pbl_fchr'  => $request->pbl_fchr ,'pbl_fptc'  => $request->pbl_fptc ,'pbl_ffce'  => $request->pbl_ffce ,'pbt_cmnt'  => $request->pbt_cmnt  ] 
        );
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
      }
  
      public function destroy($id)
      {
         $registros = DB::table($this->tabla)->where('id', '=', $id)->delete();
         return response()->json([
             'status' => true,
             'registros' => $registros
         ]);
      }
  
}
