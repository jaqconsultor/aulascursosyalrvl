<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class EmployeeController extends Controller
{
public $tabla = "employee";
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
[ 'emp_id'  => $request->emp_id ,'manager_id'  => $request->manager_id ,'emp_fname'  => $request->emp_fname ,'emp_lname'  => $request->emp_lname ,'dept_id'  => $request->dept_id ,'street'  => $request->street ,'city'  => $request->city ,'state'  => $request->state ,'zip_code'  => $request->zip_code ,'phone'  => $request->phone ,'status'  => $request->status ,'ss_number'  => $request->ss_number ,'salary'  => $request->salary ,'start_date'  => $request->start_date ,'termination_date'  => $request->termination_date ,'birth_date'  => $request->birth_date ,'bene_health_ins'  => $request->bene_health_ins ,'bene_life_ins'  => $request->bene_life_ins ,'bene_day_care'  => $request->bene_day_care ,'sex'  => $request->sex  ] 
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
[ 'emp_id'  => $request->emp_id ,'manager_id'  => $request->manager_id ,'emp_fname'  => $request->emp_fname ,'emp_lname'  => $request->emp_lname ,'dept_id'  => $request->dept_id ,'street'  => $request->street ,'city'  => $request->city ,'state'  => $request->state ,'zip_code'  => $request->zip_code ,'phone'  => $request->phone ,'status'  => $request->status ,'ss_number'  => $request->ss_number ,'salary'  => $request->salary ,'start_date'  => $request->start_date ,'termination_date'  => $request->termination_date ,'birth_date'  => $request->birth_date ,'bene_health_ins'  => $request->bene_health_ins ,'bene_life_ins'  => $request->bene_life_ins ,'bene_day_care'  => $request->bene_day_care ,'sex'  => $request->sex  ] 
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

