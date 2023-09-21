<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Dd_arterial_miController extends Controller
{
public $tabla = "dd_arterial_mi";
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
[ 'numhistoria'  => $request->numhistoria ,'num_consulta'  => $request->num_consulta ,'indicacion'  => $request->indicacion ,'referido_por'  => $request->referido_por ,'hc_text'  => $request->hc_text ,'iliaca_ext_der'  => $request->iliaca_ext_der ,'iliaca_ext_izq'  => $request->iliaca_ext_izq ,'feromonal_comun_der'  => $request->feromonal_comun_der ,'feromonal_comun_izq'  => $request->feromonal_comun_izq ,'fer_superf_prox_der'  => $request->fer_superf_prox_der ,'fer_superf_prox_izq'  => $request->fer_superf_prox_izq ,'fer_superf_distal_der'  => $request->fer_superf_distal_der ,'fer_superf_distal_izq'  => $request->fer_superf_distal_izq ,'poplitea_der'  => $request->poplitea_der ,'poplitea_izq'  => $request->poplitea_izq ,'tibial_ante_der'  => $request->tibial_ante_der ,'tibial_ante_izq'  => $request->tibial_ante_izq ,'tibial_post_der'  => $request->tibial_post_der ,'tibial_post_izq'  => $request->tibial_post_izq ,'peronea_der'  => $request->peronea_der ,'peronea_izq'  => $request->peronea_izq ,'conclusion'  => $request->conclusion ,'equipo'  => $request->equipo ,'tansductor'  => $request->tansductor ,'iliaca_ext'  => $request->iliaca_ext ,'feromonal_comun'  => $request->feromonal_comun ,'fer_superf_prox'  => $request->fer_superf_prox ,'fer_superf_distal'  => $request->fer_superf_distal ,'poplitea'  => $request->poplitea ,'tibial_ante'  => $request->tibial_ante ,'tibial_post'  => $request->tibial_post ,'peronea'  => $request->peronea ,'modo_b'  => $request->modo_b ,'modo_color'  => $request->modo_color ,'segunda_armonica'  => $request->segunda_armonica ,'contraste'  => $request->contraste ,'llenado'  => $request->llenado ,'full_text'  => $request->full_text ,'sugerencia'  => $request->sugerencia ,'puro_texto'  => $request->puro_texto  ] 
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
[ 'numhistoria'  => $request->numhistoria ,'num_consulta'  => $request->num_consulta ,'indicacion'  => $request->indicacion ,'referido_por'  => $request->referido_por ,'hc_text'  => $request->hc_text ,'iliaca_ext_der'  => $request->iliaca_ext_der ,'iliaca_ext_izq'  => $request->iliaca_ext_izq ,'feromonal_comun_der'  => $request->feromonal_comun_der ,'feromonal_comun_izq'  => $request->feromonal_comun_izq ,'fer_superf_prox_der'  => $request->fer_superf_prox_der ,'fer_superf_prox_izq'  => $request->fer_superf_prox_izq ,'fer_superf_distal_der'  => $request->fer_superf_distal_der ,'fer_superf_distal_izq'  => $request->fer_superf_distal_izq ,'poplitea_der'  => $request->poplitea_der ,'poplitea_izq'  => $request->poplitea_izq ,'tibial_ante_der'  => $request->tibial_ante_der ,'tibial_ante_izq'  => $request->tibial_ante_izq ,'tibial_post_der'  => $request->tibial_post_der ,'tibial_post_izq'  => $request->tibial_post_izq ,'peronea_der'  => $request->peronea_der ,'peronea_izq'  => $request->peronea_izq ,'conclusion'  => $request->conclusion ,'equipo'  => $request->equipo ,'tansductor'  => $request->tansductor ,'iliaca_ext'  => $request->iliaca_ext ,'feromonal_comun'  => $request->feromonal_comun ,'fer_superf_prox'  => $request->fer_superf_prox ,'fer_superf_distal'  => $request->fer_superf_distal ,'poplitea'  => $request->poplitea ,'tibial_ante'  => $request->tibial_ante ,'tibial_post'  => $request->tibial_post ,'peronea'  => $request->peronea ,'modo_b'  => $request->modo_b ,'modo_color'  => $request->modo_color ,'segunda_armonica'  => $request->segunda_armonica ,'contraste'  => $request->contraste ,'llenado'  => $request->llenado ,'full_text'  => $request->full_text ,'sugerencia'  => $request->sugerencia ,'puro_texto'  => $request->puro_texto  ] 
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

