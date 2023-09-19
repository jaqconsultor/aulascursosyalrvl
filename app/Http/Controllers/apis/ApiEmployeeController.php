<?php
namespace App\Http\Controllers\apis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class ApiEmployeeController extends Controller
{
public $tabla = "employee";
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
[ 'emp_id'  => $request->emp_id ,'manager_id'  => $request->manager_id ,'emp_fname'  => $request->emp_fname ,'emp_lname'  => $request->emp_lname ,'dept_id'  => $request->dept_id ,'street'  => $request->street ,'city'  => $request->city ,'state'  => $request->state ,'zip_code'  => $request->zip_code ,'phone'  => $request->phone ,'status'  => $request->status ,'ss_number'  => $request->ss_number ,'salary'  => $request->salary ,'start_date'  => $request->start_date ,'termination_date'  => $request->termination_date ,'birth_date'  => $request->birth_date ,'bene_health_ins'  => $request->bene_health_ins ,'bene_life_ins'  => $request->bene_life_ins ,'bene_day_care'  => $request->bene_day_care ,'sex'  => $request->sex  ] 
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
[ 'emp_id'  => $request->emp_id ,'manager_id'  => $request->manager_id ,'emp_fname'  => $request->emp_fname ,'emp_lname'  => $request->emp_lname ,'dept_id'  => $request->dept_id ,'street'  => $request->street ,'city'  => $request->city ,'state'  => $request->state ,'zip_code'  => $request->zip_code ,'phone'  => $request->phone ,'status'  => $request->status ,'ss_number'  => $request->ss_number ,'salary'  => $request->salary ,'start_date'  => $request->start_date ,'termination_date'  => $request->termination_date ,'birth_date'  => $request->birth_date ,'bene_health_ins'  => $request->bene_health_ins ,'bene_life_ins'  => $request->bene_life_ins ,'bene_day_care'  => $request->bene_day_care ,'sex'  => $request->sex  ] 
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
