<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Pre_natal_desarrollo_finoController extends Controller
{
public $tabla = "pre_natal_desarrollo_fino";
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
[ 'historia'  => $request->historia ,'fecha'  => $request->fecha ,'eg_fur'  => $request->eg_fur ,'eg_eco'  => $request->eg_eco ,'peso'  => $request->peso ,'ta'  => $request->ta ,'au'  => $request->au ,'mf'  => $request->mf ,'presentacion'  => $request->presentacion ,'edemas'  => $request->edemas ,'dbp'  => $request->dbp ,'lf'  => $request->lf ,'ac_cardiaca'  => $request->ac_cardiaca ,'la'  => $request->la ,'sg_cri'  => $request->sg_cri ,'plac_grado'  => $request->plac_grado ,'gesta_clave'  => $request->gesta_clave ,'consulta'  => $request->consulta ,'femur'  => $request->femur ,'lcc'  => $request->lcc ,'dbpf'  => $request->dbpf ,'varice'  => $request->varice ,'peso_fetal'  => $request->peso_fetal ,'foco_f'  => $request->foco_f ,'multiple'  => $request->multiple ,'cantidad'  => $request->cantidad  ] 
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
[ 'historia'  => $request->historia ,'fecha'  => $request->fecha ,'eg_fur'  => $request->eg_fur ,'eg_eco'  => $request->eg_eco ,'peso'  => $request->peso ,'ta'  => $request->ta ,'au'  => $request->au ,'mf'  => $request->mf ,'presentacion'  => $request->presentacion ,'edemas'  => $request->edemas ,'dbp'  => $request->dbp ,'lf'  => $request->lf ,'ac_cardiaca'  => $request->ac_cardiaca ,'la'  => $request->la ,'sg_cri'  => $request->sg_cri ,'plac_grado'  => $request->plac_grado ,'gesta_clave'  => $request->gesta_clave ,'consulta'  => $request->consulta ,'femur'  => $request->femur ,'lcc'  => $request->lcc ,'dbpf'  => $request->dbpf ,'varice'  => $request->varice ,'peso_fetal'  => $request->peso_fetal ,'foco_f'  => $request->foco_f ,'multiple'  => $request->multiple ,'cantidad'  => $request->cantidad  ] 
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

