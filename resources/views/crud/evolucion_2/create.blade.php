@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearEvolucion_2')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="especialidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameespecialidad")</label><div class="col-md-6"><input id="especialidad" type="text"  class="form-control" name="especialidad" required></div></div>                     <div class="row mb-3">                            <label for="ciudad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameciudad")</label><div class="col-md-6"><input id="ciudad" type="text"  class="form-control" name="ciudad" required></div></div>                     <div class="row mb-3">                            <label for="logo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelogo")</label><div class="col-md-6"><input id="logo" type="text"  class="form-control" name="logo" required></div></div>                     <div class="row mb-3">                            <label for="linea_1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelinea_1")</label><div class="col-md-6"><input id="linea_1" type="text"  class="form-control" name="linea_1" required></div></div>                     <div class="row mb-3">                            <label for="linea_2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelinea_2")</label><div class="col-md-6"><input id="linea_2" type="text"  class="form-control" name="linea_2" required></div></div>                     <div class="row mb-3">                            <label for="linea_3" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelinea_3")</label><div class="col-md-6"><input id="linea_3" type="text"  class="form-control" name="linea_3" required></div></div>                     <div class="row mb-3">                            <label for="lineag_1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelineag_1")</label><div class="col-md-6"><input id="lineag_1" type="text"  class="form-control" name="lineag_1" required></div></div>                     <div class="row mb-3">                            <label for="lineag_2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelineag_2")</label><div class="col-md-6"><input id="lineag_2" type="text"  class="form-control" name="lineag_2" required></div></div>                     <div class="row mb-3">                            <label for="clave" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameclave")</label><div class="col-md-6"><input id="clave" type="text"  class="form-control" name="clave" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="rif" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerif")</label><div class="col-md-6"><input id="rif" type="text"  class="form-control" name="rif" required></div></div>                     <div class="row mb-3">                            <label for="reporte_vacio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereporte_vacio")</label><div class="col-md-6"><input id="reporte_vacio" type="text"  class="form-control" name="reporte_vacio" required></div></div>                     <div class="row mb-3">                            <label for="moneda" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemoneda")</label><div class="col-md-6"><input id="moneda" type="text"  class="form-control" name="moneda" required></div></div>                     <div class="row mb-3">                            <label for="impuesto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimpuesto")</label><div class="col-md-6"><input id="impuesto" type="text"  class="form-control" name="impuesto" required></div></div>                     <div class="row mb-3">                            <label for="por_impues" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepor_impues")</label><div class="col-md-6"><input id="por_impues" type="text"  class="form-control" name="por_impues" required></div></div>                     <div class="row mb-3">                            <label for="am_pm" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameam_pm")</label><div class="col-md-6"><input id="am_pm" type="text"  class="form-control" name="am_pm" required></div></div>                     <div class="row mb-3">                            <label for="cantidad_paciente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad_paciente")</label><div class="col-md-6"><input id="cantidad_paciente" type="text"  class="form-control" name="cantidad_paciente" required></div></div>                     <div class="row mb-3">                            <label for="lunes_i" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelunes_i")</label><div class="col-md-6"><input id="lunes_i" type="text"  class="form-control" name="lunes_i" required></div></div>                     <div class="row mb-3">                            <label for="lunes_f" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelunes_f")</label><div class="col-md-6"><input id="lunes_f" type="text"  class="form-control" name="lunes_f" required></div></div>                     <div class="row mb-3">                            <label for="martes_i" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemartes_i")</label><div class="col-md-6"><input id="martes_i" type="text"  class="form-control" name="martes_i" required></div></div>                     <div class="row mb-3">                            <label for="martes_f" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemartes_f")</label><div class="col-md-6"><input id="martes_f" type="text"  class="form-control" name="martes_f" required></div></div>                     <div class="row mb-3">                            <label for="miercoles_i" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemiercoles_i")</label><div class="col-md-6"><input id="miercoles_i" type="text"  class="form-control" name="miercoles_i" required></div></div>                     <div class="row mb-3">                            <label for="miercoles_f" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemiercoles_f")</label><div class="col-md-6"><input id="miercoles_f" type="text"  class="form-control" name="miercoles_f" required></div></div>                     <div class="row mb-3">                            <label for="jueves_i" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namejueves_i")</label><div class="col-md-6"><input id="jueves_i" type="text"  class="form-control" name="jueves_i" required></div></div>                     <div class="row mb-3">                            <label for="jueves_f" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namejueves_f")</label><div class="col-md-6"><input id="jueves_f" type="text"  class="form-control" name="jueves_f" required></div></div>                     <div class="row mb-3">                            <label for="vienes_i" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namevienes_i")</label><div class="col-md-6"><input id="vienes_i" type="text"  class="form-control" name="vienes_i" required></div></div>                     <div class="row mb-3">                            <label for="viernes_f" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameviernes_f")</label><div class="col-md-6"><input id="viernes_f" type="text"  class="form-control" name="viernes_f" required></div></div>                     <div class="row mb-3">                            <label for="sabado_i" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesabado_i")</label><div class="col-md-6"><input id="sabado_i" type="text"  class="form-control" name="sabado_i" required></div></div>                     <div class="row mb-3">                            <label for="sabado_f" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesabado_f")</label><div class="col-md-6"><input id="sabado_f" type="text"  class="form-control" name="sabado_f" required></div></div>                     <div class="row mb-3">                            <label for="tiempo_paci" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametiempo_paci")</label><div class="col-md-6"><input id="tiempo_paci" type="text"  class="form-control" name="tiempo_paci" required></div></div>                     <div class="row mb-3">                            <label for="domingo_i" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedomingo_i")</label><div class="col-md-6"><input id="domingo_i" type="text"  class="form-control" name="domingo_i" required></div></div>                     <div class="row mb-3">                            <label for="domingo_f" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedomingo_f")</label><div class="col-md-6"><input id="domingo_f" type="text"  class="form-control" name="domingo_f" required></div></div>                     <div class="row mb-3">                            <label for="lunes" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelunes")</label><div class="col-md-6"><input id="lunes" type="text"  class="form-control" name="lunes" required></div></div>                     <div class="row mb-3">                            <label for="martes" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemartes")</label><div class="col-md-6"><input id="martes" type="text"  class="form-control" name="martes" required></div></div>                     <div class="row mb-3">                            <label for="miercoles" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemiercoles")</label><div class="col-md-6"><input id="miercoles" type="text"  class="form-control" name="miercoles" required></div></div>                     <div class="row mb-3">                            <label for="jueves" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namejueves")</label><div class="col-md-6"><input id="jueves" type="text"  class="form-control" name="jueves" required></div></div>                     <div class="row mb-3">                            <label for="viernes" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameviernes")</label><div class="col-md-6"><input id="viernes" type="text"  class="form-control" name="viernes" required></div></div>                     <div class="row mb-3">                            <label for="sabado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesabado")</label><div class="col-md-6"><input id="sabado" type="text"  class="form-control" name="sabado" required></div></div>                     <div class="row mb-3">                            <label for="domingo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedomingo")</label><div class="col-md-6"><input id="domingo" type="text"  class="form-control" name="domingo" required></div></div>                     <div class="row mb-3">                            <label for="feriado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameferiado")</label><div class="col-md-6"><input id="feriado" type="text"  class="form-control" name="feriado" required></div></div>                     <div class="row mb-3">                            <label for="cedula" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula")</label><div class="col-md-6"><input id="cedula" type="text"  class="form-control" name="cedula" required></div></div>                     <div class="row mb-3">                            <label for="min_salud" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemin_salud")</label><div class="col-md-6"><input id="min_salud" type="text"  class="form-control" name="min_salud" required></div></div>                     <div class="row mb-3">                            <label for="col_med" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecol_med")</label><div class="col-md-6"><input id="col_med" type="text"  class="form-control" name="col_med" required></div></div>                     <div class="row mb-3">                            <label for="cita_previa" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecita_previa")</label><div class="col-md-6"><input id="cita_previa" type="text"  class="form-control" name="cita_previa" required></div></div>                     <div class="row mb-3">                            <label for="telefono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono")</label><div class="col-md-6"><input id="telefono" type="text"  class="form-control" name="telefono" required></div></div>                     <div class="row mb-3">                            <label for="cobra_honorarios" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecobra_honorarios")</label><div class="col-md-6"><input id="cobra_honorarios" type="text"  class="form-control" name="cobra_honorarios" required></div></div>                     <div class="row mb-3">                            <label for="por_cobranza" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepor_cobranza")</label><div class="col-md-6"><input id="por_cobranza" type="text"  class="form-control" name="por_cobranza" required></div></div>                     <div class="row mb-3">                            <label for="por_retención_seg" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepor_retención_seg")</label><div class="col-md-6"><input id="por_retención_seg" type="text"  class="form-control" name="por_retención_seg" required></div></div>                     <div class="row mb-3">                            <label for="por_retención_part" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepor_retención_part")</label><div class="col-md-6"><input id="por_retención_part" type="text"  class="form-control" name="por_retención_part" required></div></div>                     <div class="row mb-3">                            <label for="accionista" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameaccionista")</label><div class="col-md-6"><input id="accionista" type="text"  class="form-control" name="accionista" required></div></div>                     <div class="row mb-3">                            <label for="consultorio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsultorio")</label><div class="col-md-6"><input id="consultorio" type="text"  class="form-control" name="consultorio" required></div></div>                     <div class="row mb-3">                            <label for="contrasena" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecontrasena")</label><div class="col-md-6"><input id="contrasena" type="text"  class="form-control" name="contrasena" required></div></div>                     <div class="row mb-3">                            <label for="paga_iva" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepaga_iva")</label><div class="col-md-6"><input id="paga_iva" type="text"  class="form-control" name="paga_iva" required></div></div>                     <div class="row mb-3">                            <label for="domigo_f" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedomigo_f")</label><div class="col-md-6"><input id="domigo_f" type="text"  class="form-control" name="domigo_f" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">@lang('dicc.VerLista')</span>
</a>
</div>
</div>
</form>
</p>
</div>
<div class="card-footer">
</div>
</div>
</div>
</div>
@endsection
