@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearUltra_testiculos')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  class="form-control" name="consulta" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="equipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameequipo")</label><div class="col-md-6"><input id="equipo" type="text"  class="form-control" name="equipo" required></div></div>                     <div class="row mb-3">                            <label for="transductor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametransductor")</label><div class="col-md-6"><input id="transductor" type="text"  class="form-control" name="transductor" required></div></div>                     <div class="row mb-3">                            <label for="frecuencia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefrecuencia")</label><div class="col-md-6"><input id="frecuencia" type="text"  class="form-control" name="frecuencia" required></div></div>                     <div class="row mb-3">                            <label for="motivo_estudio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemotivo_estudio")</label><div class="col-md-6"><input id="motivo_estudio" type="text"  class="form-control" name="motivo_estudio" required></div></div>                     <div class="row mb-3">                            <label for="td_long" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametd_long")</label><div class="col-md-6"><input id="td_long" type="text"  class="form-control" name="td_long" required></div></div>                     <div class="row mb-3">                            <label for="td_tranv" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametd_tranv")</label><div class="col-md-6"><input id="td_tranv" type="text"  class="form-control" name="td_tranv" required></div></div>                     <div class="row mb-3">                            <label for="td_post" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametd_post")</label><div class="col-md-6"><input id="td_post" type="text"  class="form-control" name="td_post" required></div></div>                     <div class="row mb-3">                            <label for="td_parequima" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametd_parequima")</label><div class="col-md-6"><input id="td_parequima" type="text"  class="form-control" name="td_parequima" required></div></div>                     <div class="row mb-3">                            <label for="td_epididimo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametd_epididimo")</label><div class="col-md-6"><input id="td_epididimo" type="text"  class="form-control" name="td_epididimo" required></div></div>                     <div class="row mb-3">                            <label for="td_epididimo_med_1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametd_epididimo_med_1")</label><div class="col-md-6"><input id="td_epididimo_med_1" type="text"  class="form-control" name="td_epididimo_med_1" required></div></div>                     <div class="row mb-3">                            <label for="td_epididimo_med_2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametd_epididimo_med_2")</label><div class="col-md-6"><input id="td_epididimo_med_2" type="text"  class="form-control" name="td_epididimo_med_2" required></div></div>                     <div class="row mb-3">                            <label for="td_hidrocele" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametd_hidrocele")</label><div class="col-md-6"><input id="td_hidrocele" type="text"  class="form-control" name="td_hidrocele" required></div></div>                     <div class="row mb-3">                            <label for="td_diametro_plexo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametd_diametro_plexo")</label><div class="col-md-6"><input id="td_diametro_plexo" type="text"  class="form-control" name="td_diametro_plexo" required></div></div>                     <div class="row mb-3">                            <label for="ti_long" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameti_long")</label><div class="col-md-6"><input id="ti_long" type="text"  class="form-control" name="ti_long" required></div></div>                     <div class="row mb-3">                            <label for="ti_tranv" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameti_tranv")</label><div class="col-md-6"><input id="ti_tranv" type="text"  class="form-control" name="ti_tranv" required></div></div>                     <div class="row mb-3">                            <label for="ti_post" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameti_post")</label><div class="col-md-6"><input id="ti_post" type="text"  class="form-control" name="ti_post" required></div></div>                     <div class="row mb-3">                            <label for="ti_parequima" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameti_parequima")</label><div class="col-md-6"><input id="ti_parequima" type="text"  class="form-control" name="ti_parequima" required></div></div>                     <div class="row mb-3">                            <label for="ti_epididimo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameti_epididimo")</label><div class="col-md-6"><input id="ti_epididimo" type="text"  class="form-control" name="ti_epididimo" required></div></div>                     <div class="row mb-3">                            <label for="ti_epididimo_med_1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameti_epididimo_med_1")</label><div class="col-md-6"><input id="ti_epididimo_med_1" type="text"  class="form-control" name="ti_epididimo_med_1" required></div></div>                     <div class="row mb-3">                            <label for="ti_epididimo_med_2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameti_epididimo_med_2")</label><div class="col-md-6"><input id="ti_epididimo_med_2" type="text"  class="form-control" name="ti_epididimo_med_2" required></div></div>                     <div class="row mb-3">                            <label for="ti_hidrocele" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameti_hidrocele")</label><div class="col-md-6"><input id="ti_hidrocele" type="text"  class="form-control" name="ti_hidrocele" required></div></div>                     <div class="row mb-3">                            <label for="ti_diametro_plexo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameti_diametro_plexo")</label><div class="col-md-6"><input id="ti_diametro_plexo" type="text"  class="form-control" name="ti_diametro_plexo" required></div></div>                     <div class="row mb-3">                            <label for="conclusion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconclusion")</label><div class="col-md-6"><input id="conclusion" type="text"  class="form-control" name="conclusion" required></div></div>                     <div class="row mb-3">                            <label for="hallazgos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehallazgos")</label><div class="col-md-6"><input id="hallazgos" type="text"  class="form-control" name="hallazgos" required></div></div>                     <div class="row mb-3">                            <label for="medico_1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico_1")</label><div class="col-md-6"><input id="medico_1" type="text"  class="form-control" name="medico_1" required></div></div>                     <div class="row mb-3">                            <label for="medico_2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico_2")</label><div class="col-md-6"><input id="medico_2" type="text"  class="form-control" name="medico_2" required></div></div>                     <div class="row mb-3">                            <label for="doppler_td" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedoppler_td")</label><div class="col-md-6"><input id="doppler_td" type="text"  class="form-control" name="doppler_td" required></div></div>                     <div class="row mb-3">                            <label for="doppler_ti" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedoppler_ti")</label><div class="col-md-6"><input id="doppler_ti" type="text"  class="form-control" name="doppler_ti" required></div></div>                     <div class="row mb-3">                            <label for="observaciones" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameobservaciones")</label><div class="col-md-6"><input id="observaciones" type="text"  class="form-control" name="observaciones" required></div></div>                     <div class="row mb-3">                            <label for="puro_texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepuro_texto")</label><div class="col-md-6"><input id="puro_texto" type="text"  class="form-control" name="puro_texto" required></div></div>
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
