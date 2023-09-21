<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiPbcatvldController extends Controller
{
public $tabla = "pbcatvld";
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
[ 'pbv_name'  => $request->pbv_name ,'pbv_vald'  => $request->pbv_vald ,'pbv_type'  => $request->pbv_type ,'pbv_cntr'  => $request->pbv_cntr ,'pbv_msg'  => $request->pbv_msg  ] 
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
[ 'pbv_name'  => $request->pbv_name ,'pbv_vald'  => $request->pbv_vald ,'pbv_type'  => $request->pbv_type ,'pbv_cntr'  => $request->pbv_cntr ,'pbv_msg'  => $request->pbv_msg  ] 
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
