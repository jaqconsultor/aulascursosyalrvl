<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Ultra_abdominalController extends Controller
{
public $tabla = "ultra_abdominal";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'transductor'  => $request->transductor ,'referido'  => $request->referido ,'vesicula_bilial'  => $request->vesicula_bilial ,'higado'  => $request->higado ,'porta_coledoco'  => $request->porta_coledoco ,'pancreas'  => $request->pancreas ,'rinon_derecho'  => $request->rinon_derecho ,'rinon_izquierdo'  => $request->rinon_izquierdo ,'prostata'  => $request->prostata ,'vejiga_urina'  => $request->vejiga_urina ,'vol_res_v_p_m'  => $request->vol_res_v_p_m ,'ascitis'  => $request->ascitis ,'retroperitoneo'  => $request->retroperitoneo ,'vasos_sanguineos'  => $request->vasos_sanguineos ,'otros'  => $request->otros ,'conclusiones'  => $request->conclusiones ,'puro_texto'  => $request->puro_texto  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'fecha'  => $request->fecha ,'transductor'  => $request->transductor ,'referido'  => $request->referido ,'vesicula_bilial'  => $request->vesicula_bilial ,'higado'  => $request->higado ,'porta_coledoco'  => $request->porta_coledoco ,'pancreas'  => $request->pancreas ,'rinon_derecho'  => $request->rinon_derecho ,'rinon_izquierdo'  => $request->rinon_izquierdo ,'prostata'  => $request->prostata ,'vejiga_urina'  => $request->vejiga_urina ,'vol_res_v_p_m'  => $request->vol_res_v_p_m ,'ascitis'  => $request->ascitis ,'retroperitoneo'  => $request->retroperitoneo ,'vasos_sanguineos'  => $request->vasos_sanguineos ,'otros'  => $request->otros ,'conclusiones'  => $request->conclusiones ,'puro_texto'  => $request->puro_texto  ] 
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

