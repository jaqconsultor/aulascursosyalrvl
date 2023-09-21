<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPbcatcolController extends Controller
{
public $tabla = "pbcatcol";
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
[ 'pbc_tnam'  => $request->pbc_tnam ,'pbc_tid'  => $request->pbc_tid ,'pbc_ownr'  => $request->pbc_ownr ,'pbc_cnam'  => $request->pbc_cnam ,'pbc_cid'  => $request->pbc_cid ,'pbc_labl'  => $request->pbc_labl ,'pbc_lpos'  => $request->pbc_lpos ,'pbc_hdr'  => $request->pbc_hdr ,'pbc_hpos'  => $request->pbc_hpos ,'pbc_jtfy'  => $request->pbc_jtfy ,'pbc_mask'  => $request->pbc_mask ,'pbc_case'  => $request->pbc_case ,'pbc_hght'  => $request->pbc_hght ,'pbc_wdth'  => $request->pbc_wdth ,'pbc_ptrn'  => $request->pbc_ptrn ,'pbc_bmap'  => $request->pbc_bmap ,'pbc_init'  => $request->pbc_init ,'pbc_cmnt'  => $request->pbc_cmnt ,'pbc_edit'  => $request->pbc_edit ,'pbc_tag'  => $request->pbc_tag  ] 
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
[ 'pbc_tnam'  => $request->pbc_tnam ,'pbc_tid'  => $request->pbc_tid ,'pbc_ownr'  => $request->pbc_ownr ,'pbc_cnam'  => $request->pbc_cnam ,'pbc_cid'  => $request->pbc_cid ,'pbc_labl'  => $request->pbc_labl ,'pbc_lpos'  => $request->pbc_lpos ,'pbc_hdr'  => $request->pbc_hdr ,'pbc_hpos'  => $request->pbc_hpos ,'pbc_jtfy'  => $request->pbc_jtfy ,'pbc_mask'  => $request->pbc_mask ,'pbc_case'  => $request->pbc_case ,'pbc_hght'  => $request->pbc_hght ,'pbc_wdth'  => $request->pbc_wdth ,'pbc_ptrn'  => $request->pbc_ptrn ,'pbc_bmap'  => $request->pbc_bmap ,'pbc_init'  => $request->pbc_init ,'pbc_cmnt'  => $request->pbc_cmnt ,'pbc_edit'  => $request->pbc_edit ,'pbc_tag'  => $request->pbc_tag  ] 
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
