@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerEco_obstetrico_tercer_2')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text" value="{{$registro->historia}}" class="form-control" name="historia" readonly></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text" value="{{$registro->consulta}}" class="form-control" name="consulta" readonly></div></div>                     <div class="row mb-3">                            <label for="gesta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namegesta")</label><div class="col-md-6"><input id="gesta" type="text" value="{{$registro->gesta}}" class="form-control" name="gesta" readonly></div></div>                     <div class="row mb-3">                            <label for="fur" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefur")</label><div class="col-md-6"><input id="fur" type="text" value="{{$registro->fur}}" class="form-control" name="fur" readonly></div></div>                     <div class="row mb-3">                            <label for="eg" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameeg")</label><div class="col-md-6"><input id="eg" type="text" value="{{$registro->eg}}" class="form-control" name="eg" readonly></div></div>                     <div class="row mb-3">                            <label for="gestacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namegestacion")</label><div class="col-md-6"><input id="gestacion" type="text" value="{{$registro->gestacion}}" class="form-control" name="gestacion" readonly></div></div>                     <div class="row mb-3">                            <label for="situacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesituacion")</label><div class="col-md-6"><input id="situacion" type="text" value="{{$registro->situacion}}" class="form-control" name="situacion" readonly></div></div>                     <div class="row mb-3">                            <label for="dorso" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedorso")</label><div class="col-md-6"><input id="dorso" type="text" value="{{$registro->dorso}}" class="form-control" name="dorso" readonly></div></div>                     <div class="row mb-3">                            <label for="presentacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepresentacion")</label><div class="col-md-6"><input id="presentacion" type="text" value="{{$registro->presentacion}}" class="form-control" name="presentacion" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_ca_bp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_ca_bp")</label><div class="col-md-6"><input id="bio_ca_bp" type="text" value="{{$registro->bio_ca_bp}}" class="form-control" name="bio_ca_bp" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_ca_cc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_ca_cc")</label><div class="col-md-6"><input id="bio_ca_cc" type="text" value="{{$registro->bio_ca_cc}}" class="form-control" name="bio_ca_cc" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_ca_of" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_ca_of")</label><div class="col-md-6"><input id="bio_ca_of" type="text" value="{{$registro->bio_ca_of}}" class="form-control" name="bio_ca_of" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_in_ic" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_in_ic")</label><div class="col-md-6"><input id="bio_in_ic" type="text" value="{{$registro->bio_in_ic}}" class="form-control" name="bio_in_ic" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_or_ioe" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_or_ioe")</label><div class="col-md-6"><input id="bio_or_ioe" type="text" value="{{$registro->bio_or_ioe}}" class="form-control" name="bio_or_ioe" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_or_io" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_or_io")</label><div class="col-md-6"><input id="bio_or_io" type="text" value="{{$registro->bio_or_io}}" class="form-control" name="bio_or_io" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_car_apc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_car_apc")</label><div class="col-md-6"><input id="bio_car_apc" type="text" value="{{$registro->bio_car_apc}}" class="form-control" name="bio_car_apc" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_car_apt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_car_apt")</label><div class="col-md-6"><input id="bio_car_apt" type="text" value="{{$registro->bio_car_apt}}" class="form-control" name="bio_car_apt" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_aorta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_aorta")</label><div class="col-md-6"><input id="bio_aorta" type="text" value="{{$registro->bio_aorta}}" class="form-control" name="bio_aorta" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_abdomen" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_abdomen")</label><div class="col-md-6"><input id="bio_abdomen" type="text" value="{{$registro->bio_abdomen}}" class="form-control" name="bio_abdomen" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_ta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_ta")</label><div class="col-md-6"><input id="bio_ta" type="text" value="{{$registro->bio_ta}}" class="form-control" name="bio_ta" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_ca" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_ca")</label><div class="col-md-6"><input id="bio_ca" type="text" value="{{$registro->bio_ca}}" class="form-control" name="bio_ca" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_humero" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_humero")</label><div class="col-md-6"><input id="bio_humero" type="text" value="{{$registro->bio_humero}}" class="form-control" name="bio_humero" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_cubito" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_cubito")</label><div class="col-md-6"><input id="bio_cubito" type="text" value="{{$registro->bio_cubito}}" class="form-control" name="bio_cubito" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_femur" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_femur")</label><div class="col-md-6"><input id="bio_femur" type="text" value="{{$registro->bio_femur}}" class="form-control" name="bio_femur" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_tibia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_tibia")</label><div class="col-md-6"><input id="bio_tibia" type="text" value="{{$registro->bio_tibia}}" class="form-control" name="bio_tibia" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_sacro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_sacro")</label><div class="col-md-6"><input id="bio_sacro" type="text" value="{{$registro->bio_sacro}}" class="form-control" name="bio_sacro" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_peso_fetal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_peso_fetal")</label><div class="col-md-6"><input id="bio_peso_fetal" type="text" value="{{$registro->bio_peso_fetal}}" class="form-control" name="bio_peso_fetal" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_talla" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_talla")</label><div class="col-md-6"><input id="bio_talla" type="text" value="{{$registro->bio_talla}}" class="form-control" name="bio_talla" readonly></div></div>                     <div class="row mb-3">                            <label for="bio_sexo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebio_sexo")</label><div class="col-md-6"><input id="bio_sexo" type="text" value="{{$registro->bio_sexo}}" class="form-control" name="bio_sexo" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_polo_cefalico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_polo_cefalico")</label><div class="col-md-6"><input id="ana_polo_cefalico" type="text" value="{{$registro->ana_polo_cefalico}}" class="form-control" name="ana_polo_cefalico" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_ventriculos_cerebrales" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_ventriculos_cerebrales")</label><div class="col-md-6"><input id="ana_ventriculos_cerebrales" type="text" value="{{$registro->ana_ventriculos_cerebrales}}" class="form-control" name="ana_ventriculos_cerebrales" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_cerebelo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_cerebelo")</label><div class="col-md-6"><input id="ana_cerebelo" type="text" value="{{$registro->ana_cerebelo}}" class="form-control" name="ana_cerebelo" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_rostro_fetal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_rostro_fetal")</label><div class="col-md-6"><input id="ana_rostro_fetal" type="text" value="{{$registro->ana_rostro_fetal}}" class="form-control" name="ana_rostro_fetal" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_actitud_fetal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_actitud_fetal")</label><div class="col-md-6"><input id="ana_actitud_fetal" type="text" value="{{$registro->ana_actitud_fetal}}" class="form-control" name="ana_actitud_fetal" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_columna_vertebral" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_columna_vertebral")</label><div class="col-md-6"><input id="ana_columna_vertebral" type="text" value="{{$registro->ana_columna_vertebral}}" class="form-control" name="ana_columna_vertebral" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_torax" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_torax")</label><div class="col-md-6"><input id="ana_torax" type="text" value="{{$registro->ana_torax}}" class="form-control" name="ana_torax" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_relacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_relacion")</label><div class="col-md-6"><input id="ana_relacion" type="text" value="{{$registro->ana_relacion}}" class="form-control" name="ana_relacion" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_corazon" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_corazon")</label><div class="col-md-6"><input id="ana_corazon" type="text" value="{{$registro->ana_corazon}}" class="form-control" name="ana_corazon" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_corte_tracameral" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_corte_tracameral")</label><div class="col-md-6"><input id="ana_corte_tracameral" type="text" value="{{$registro->ana_corte_tracameral}}" class="form-control" name="ana_corte_tracameral" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_tracto_de_salida" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_tracto_de_salida")</label><div class="col-md-6"><input id="ana_tracto_de_salida" type="text" value="{{$registro->ana_tracto_de_salida}}" class="form-control" name="ana_tracto_de_salida" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_estomago" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_estomago")</label><div class="col-md-6"><input id="ana_estomago" type="text" value="{{$registro->ana_estomago}}" class="form-control" name="ana_estomago" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_intestino" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_intestino")</label><div class="col-md-6"><input id="ana_intestino" type="text" value="{{$registro->ana_intestino}}" class="form-control" name="ana_intestino" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_paredes_abdominales" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_paredes_abdominales")</label><div class="col-md-6"><input id="ana_paredes_abdominales" type="text" value="{{$registro->ana_paredes_abdominales}}" class="form-control" name="ana_paredes_abdominales" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_rinone" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_rinone")</label><div class="col-md-6"><input id="ana_rinone" type="text" value="{{$registro->ana_rinone}}" class="form-control" name="ana_rinone" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_vejiga" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_vejiga")</label><div class="col-md-6"><input id="ana_vejiga" type="text" value="{{$registro->ana_vejiga}}" class="form-control" name="ana_vejiga" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_ex_brazo_an_md" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_ex_brazo_an_md")</label><div class="col-md-6"><input id="ana_ex_brazo_an_md" type="text" value="{{$registro->ana_ex_brazo_an_md}}" class="form-control" name="ana_ex_brazo_an_md" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_ex_brazo_an_mi" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_ex_brazo_an_mi")</label><div class="col-md-6"><input id="ana_ex_brazo_an_mi" type="text" value="{{$registro->ana_ex_brazo_an_mi}}" class="form-control" name="ana_ex_brazo_an_mi" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_ex_muslo_ppd" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_ex_muslo_ppd")</label><div class="col-md-6"><input id="ana_ex_muslo_ppd" type="text" value="{{$registro->ana_ex_muslo_ppd}}" class="form-control" name="ana_ex_muslo_ppd" readonly></div></div>                     <div class="row mb-3">                            <label for="ana_ex_muslo_ppi" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameana_ex_muslo_ppi")</label><div class="col-md-6"><input id="ana_ex_muslo_ppi" type="text" value="{{$registro->ana_ex_muslo_ppi}}" class="form-control" name="ana_ex_muslo_ppi" readonly></div></div>                     <div class="row mb-3">                            <label for="fun_liquido_amniotico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefun_liquido_amniotico")</label><div class="col-md-6"><input id="fun_liquido_amniotico" type="text" value="{{$registro->fun_liquido_amniotico}}" class="form-control" name="fun_liquido_amniotico" readonly></div></div>                     <div class="row mb-3">                            <label for="fun_indice_la" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefun_indice_la")</label><div class="col-md-6"><input id="fun_indice_la" type="text" value="{{$registro->fun_indice_la}}" class="form-control" name="fun_indice_la" readonly></div></div>                     <div class="row mb-3">                            <label for="fun_dp_ubicacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefun_dp_ubicacion")</label><div class="col-md-6"><input id="fun_dp_ubicacion" type="text" value="{{$registro->fun_dp_ubicacion}}" class="form-control" name="fun_dp_ubicacion" readonly></div></div>                     <div class="row mb-3">                            <label for="fun_dp_grado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefun_dp_grado")</label><div class="col-md-6"><input id="fun_dp_grado" type="text" value="{{$registro->fun_dp_grado}}" class="form-control" name="fun_dp_grado" readonly></div></div>                     <div class="row mb-3">                            <label for="fun_dp_grosor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefun_dp_grosor")</label><div class="col-md-6"><input id="fun_dp_grosor" type="text" value="{{$registro->fun_dp_grosor}}" class="form-control" name="fun_dp_grosor" readonly></div></div>                     <div class="row mb-3">                            <label for="fun_dp_cordon_umbilical" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefun_dp_cordon_umbilical")</label><div class="col-md-6"><input id="fun_dp_cordon_umbilical" type="text" value="{{$registro->fun_dp_cordon_umbilical}}" class="form-control" name="fun_dp_cordon_umbilical" readonly></div></div>                     <div class="row mb-3">                            <label for="fun_dp_movimientos_respiratorios" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefun_dp_movimientos_respiratorios")</label><div class="col-md-6"><input id="fun_dp_movimientos_respiratorios" type="text" value="{{$registro->fun_dp_movimientos_respiratorios}}" class="form-control" name="fun_dp_movimientos_respiratorios" readonly></div></div>                     <div class="row mb-3">                            <label for="fun_dp_tono_fetal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefun_dp_tono_fetal")</label><div class="col-md-6"><input id="fun_dp_tono_fetal" type="text" value="{{$registro->fun_dp_tono_fetal}}" class="form-control" name="fun_dp_tono_fetal" readonly></div></div>                     <div class="row mb-3">                            <label for="conclusion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconclusion")</label><div class="col-md-6"><input id="conclusion" type="text" value="{{$registro->conclusion}}" class="form-control" name="conclusion" readonly></div></div>                     <div class="row mb-3">                            <label for="observacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameobservacion")</label><div class="col-md-6"><input id="observacion" type="text" value="{{$registro->observacion}}" class="form-control" name="observacion" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text" value="{{$registro->fecha}}" class="form-control" name="fecha" readonly></div></div>                     <div class="row mb-3">                            <label for="movimientos_feto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemovimientos_feto")</label><div class="col-md-6"><input id="movimientos_feto" type="text" value="{{$registro->movimientos_feto}}" class="form-control" name="movimientos_feto" readonly></div></div>                     <div class="row mb-3">                            <label for="reactividad_cardiaca" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereactividad_cardiaca")</label><div class="col-md-6"><input id="reactividad_cardiaca" type="text" value="{{$registro->reactividad_cardiaca}}" class="form-control" name="reactividad_cardiaca" readonly></div></div>                     <div class="row mb-3">                            <label for="liquido_amniotico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameliquido_amniotico")</label><div class="col-md-6"><input id="liquido_amniotico" type="text" value="{{$registro->liquido_amniotico}}" class="form-control" name="liquido_amniotico" readonly></div></div>                     <div class="row mb-3">                            <label for="puro_texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepuro_texto")</label><div class="col-md-6"><input id="puro_texto" type="text" value="{{$registro->puro_texto}}" class="form-control" name="puro_texto" readonly></div></div>                     <div class="row mb-3">                            <label for="gemelo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namegemelo")</label><div class="col-md-6"><input id="gemelo" type="text" value="{{$registro->gemelo}}" class="form-control" name="gemelo" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span>
</a>
</div>
</div>
</p>
</div>
<div class="card-footer">
</div>
</div>
</div>
</div>
@endforeach
@endsection
