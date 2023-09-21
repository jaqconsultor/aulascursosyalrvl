<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPbcatedtController extends Controller
{
public $tabla = "pbcatedt";
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
[ 'pbe_name'  => $request->pbe_name ,'pbe_edit'  => $request->pbe_edit ,'pbe_type'  => $request->pbe_type ,'pbe_cntr'  => $request->pbe_cntr ,'pbe_seqn'  => $request->pbe_seqn ,'pbe_flag'  => $request->pbe_flag ,'pbe_work'  => $request->pbe_work  ] 
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
[ 'pbe_name'  => $request->pbe_name ,'pbe_edit'  => $request->pbe_edit ,'pbe_type'  => $request->pbe_type ,'pbe_cntr'  => $request->pbe_cntr ,'pbe_seqn'  => $request->pbe_seqn ,'pbe_flag'  => $request->pbe_flag ,'pbe_work'  => $request->pbe_work  ] 
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
