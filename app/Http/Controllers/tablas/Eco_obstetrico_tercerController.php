<?php

namespace App\Http\Controllers\tablas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use DB;

class Eco_obstetrico_tercerController extends Controller
{
public $tabla = "eco_obstetrico_tercer";
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'gesta'  => $request->gesta ,'fur'  => $request->fur ,'eg'  => $request->eg ,'gestacion'  => $request->gestacion ,'situacion'  => $request->situacion ,'dorso'  => $request->dorso ,'presentacion'  => $request->presentacion ,'bio_ca_bp'  => $request->bio_ca_bp ,'bio_ca_cc'  => $request->bio_ca_cc ,'bio_ca_of'  => $request->bio_ca_of ,'bio_in_ic'  => $request->bio_in_ic ,'bio_or_ioe'  => $request->bio_or_ioe ,'bio_or_io'  => $request->bio_or_io ,'bio_car_apc'  => $request->bio_car_apc ,'bio_car_apt'  => $request->bio_car_apt ,'bio_aorta'  => $request->bio_aorta ,'bio_abdomen'  => $request->bio_abdomen ,'bio_ta'  => $request->bio_ta ,'bio_ca'  => $request->bio_ca ,'bio_humero'  => $request->bio_humero ,'bio_cubito'  => $request->bio_cubito ,'bio_femur'  => $request->bio_femur ,'bio_tibia'  => $request->bio_tibia ,'bio_sacro'  => $request->bio_sacro ,'bio_peso_fetal'  => $request->bio_peso_fetal ,'bio_talla'  => $request->bio_talla ,'bio_sexo'  => $request->bio_sexo ,'ana_polo_cefalico'  => $request->ana_polo_cefalico ,'ana_ventriculos_cerebrales'  => $request->ana_ventriculos_cerebrales ,'ana_cerebelo'  => $request->ana_cerebelo ,'ana_rostro_fetal'  => $request->ana_rostro_fetal ,'ana_actitud_fetal'  => $request->ana_actitud_fetal ,'ana_columna_vertebral'  => $request->ana_columna_vertebral ,'ana_torax'  => $request->ana_torax ,'ana_relacion'  => $request->ana_relacion ,'ana_corazon'  => $request->ana_corazon ,'ana_corte_tracameral'  => $request->ana_corte_tracameral ,'ana_tracto_de_salida'  => $request->ana_tracto_de_salida ,'ana_estomago'  => $request->ana_estomago ,'ana_intestino'  => $request->ana_intestino ,'ana_paredes_abdominales'  => $request->ana_paredes_abdominales ,'ana_rinone'  => $request->ana_rinone ,'ana_vejiga'  => $request->ana_vejiga ,'ana_ex_brazo_an_md'  => $request->ana_ex_brazo_an_md ,'ana_ex_brazo_an_mi'  => $request->ana_ex_brazo_an_mi ,'ana_ex_muslo_ppd'  => $request->ana_ex_muslo_ppd ,'ana_ex_muslo_ppi'  => $request->ana_ex_muslo_ppi ,'fun_liquido_amniotico'  => $request->fun_liquido_amniotico ,'fun_indice_la'  => $request->fun_indice_la ,'fun_dp_ubicacion'  => $request->fun_dp_ubicacion ,'fun_dp_grado'  => $request->fun_dp_grado ,'fun_dp_grosor'  => $request->fun_dp_grosor ,'fun_dp_cordon_umbilical'  => $request->fun_dp_cordon_umbilical ,'fun_dp_movimientos_respiratorios'  => $request->fun_dp_movimientos_respiratorios ,'fun_dp_tono_fetal'  => $request->fun_dp_tono_fetal ,'conclusion'  => $request->conclusion ,'observacion'  => $request->observacion ,'fecha'  => $request->fecha ,'movimientos_feto'  => $request->movimientos_feto ,'reactividad_cardiaca'  => $request->reactividad_cardiaca ,'liquido_amniotico'  => $request->liquido_amniotico ,'puro_texto'  => $request->puro_texto ,'gemelo'  => $request->gemelo  ] 
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
[ 'historia'  => $request->historia ,'consulta'  => $request->consulta ,'gesta'  => $request->gesta ,'fur'  => $request->fur ,'eg'  => $request->eg ,'gestacion'  => $request->gestacion ,'situacion'  => $request->situacion ,'dorso'  => $request->dorso ,'presentacion'  => $request->presentacion ,'bio_ca_bp'  => $request->bio_ca_bp ,'bio_ca_cc'  => $request->bio_ca_cc ,'bio_ca_of'  => $request->bio_ca_of ,'bio_in_ic'  => $request->bio_in_ic ,'bio_or_ioe'  => $request->bio_or_ioe ,'bio_or_io'  => $request->bio_or_io ,'bio_car_apc'  => $request->bio_car_apc ,'bio_car_apt'  => $request->bio_car_apt ,'bio_aorta'  => $request->bio_aorta ,'bio_abdomen'  => $request->bio_abdomen ,'bio_ta'  => $request->bio_ta ,'bio_ca'  => $request->bio_ca ,'bio_humero'  => $request->bio_humero ,'bio_cubito'  => $request->bio_cubito ,'bio_femur'  => $request->bio_femur ,'bio_tibia'  => $request->bio_tibia ,'bio_sacro'  => $request->bio_sacro ,'bio_peso_fetal'  => $request->bio_peso_fetal ,'bio_talla'  => $request->bio_talla ,'bio_sexo'  => $request->bio_sexo ,'ana_polo_cefalico'  => $request->ana_polo_cefalico ,'ana_ventriculos_cerebrales'  => $request->ana_ventriculos_cerebrales ,'ana_cerebelo'  => $request->ana_cerebelo ,'ana_rostro_fetal'  => $request->ana_rostro_fetal ,'ana_actitud_fetal'  => $request->ana_actitud_fetal ,'ana_columna_vertebral'  => $request->ana_columna_vertebral ,'ana_torax'  => $request->ana_torax ,'ana_relacion'  => $request->ana_relacion ,'ana_corazon'  => $request->ana_corazon ,'ana_corte_tracameral'  => $request->ana_corte_tracameral ,'ana_tracto_de_salida'  => $request->ana_tracto_de_salida ,'ana_estomago'  => $request->ana_estomago ,'ana_intestino'  => $request->ana_intestino ,'ana_paredes_abdominales'  => $request->ana_paredes_abdominales ,'ana_rinone'  => $request->ana_rinone ,'ana_vejiga'  => $request->ana_vejiga ,'ana_ex_brazo_an_md'  => $request->ana_ex_brazo_an_md ,'ana_ex_brazo_an_mi'  => $request->ana_ex_brazo_an_mi ,'ana_ex_muslo_ppd'  => $request->ana_ex_muslo_ppd ,'ana_ex_muslo_ppi'  => $request->ana_ex_muslo_ppi ,'fun_liquido_amniotico'  => $request->fun_liquido_amniotico ,'fun_indice_la'  => $request->fun_indice_la ,'fun_dp_ubicacion'  => $request->fun_dp_ubicacion ,'fun_dp_grado'  => $request->fun_dp_grado ,'fun_dp_grosor'  => $request->fun_dp_grosor ,'fun_dp_cordon_umbilical'  => $request->fun_dp_cordon_umbilical ,'fun_dp_movimientos_respiratorios'  => $request->fun_dp_movimientos_respiratorios ,'fun_dp_tono_fetal'  => $request->fun_dp_tono_fetal ,'conclusion'  => $request->conclusion ,'observacion'  => $request->observacion ,'fecha'  => $request->fecha ,'movimientos_feto'  => $request->movimientos_feto ,'reactividad_cardiaca'  => $request->reactividad_cardiaca ,'liquido_amniotico'  => $request->liquido_amniotico ,'puro_texto'  => $request->puro_texto ,'gemelo'  => $request->gemelo  ] 
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

