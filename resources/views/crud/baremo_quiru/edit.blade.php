@extends('layouts.app')
@section('content')
@foreach ($registros as $registro) 
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarRole')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('roles.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="consecuti" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsecuti")</label><div class="col-md-6"><input id="consecuti" type="text"  value="{{$registro->consecuti}}" class="form-control" name="consecuti" required></div></div>                     <div class="row mb-3">                            <label for="cod_inter" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_inter")</label><div class="col-md-6"><input id="cod_inter" type="text"  value="{{$registro->cod_inter}}" class="form-control" name="cod_inter" required></div></div>                     <div class="row mb-3">                            <label for="cod_clini" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_clini")</label><div class="col-md-6"><input id="cod_clini" type="text"  value="{{$registro->cod_clini}}" class="form-control" name="cod_clini" required></div></div>                     <div class="row mb-3">                            <label for="ced_paciente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameced_paciente")</label><div class="col-md-6"><input id="ced_paciente" type="text"  value="{{$registro->ced_paciente}}" class="form-control" name="ced_paciente" required></div></div>                     <div class="row mb-3">                            <label for="nom_interven" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenom_interven")</label><div class="col-md-6"><input id="nom_interven" type="text"  value="{{$registro->nom_interven}}" class="form-control" name="nom_interven" required></div></div>                     <div class="row mb-3">                            <label for="nom_paciente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenom_paciente")</label><div class="col-md-6"><input id="nom_paciente" type="text"  value="{{$registro->nom_paciente}}" class="form-control" name="nom_paciente" required></div></div>                     <div class="row mb-3">                            <label for="fecha_creado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_creado")</label><div class="col-md-6"><input id="fecha_creado" type="text"  value="{{$registro->fecha_creado}}" class="form-control" name="fecha_creado" required></div></div>                     <div class="row mb-3">                            <label for="fecha_opera" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_opera")</label><div class="col-md-6"><input id="fecha_opera" type="text"  value="{{$registro->fecha_opera}}" class="form-control" name="fecha_opera" required></div></div>                     <div class="row mb-3">                            <label for="hora_opera" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora_opera")</label><div class="col-md-6"><input id="hora_opera" type="text"  value="{{$registro->hora_opera}}" class="form-control" name="hora_opera" required></div></div>                     <div class="row mb-3">                            <label for="monto_opera" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_opera")</label><div class="col-md-6"><input id="monto_opera" type="text"  value="{{$registro->monto_opera}}" class="form-control" name="monto_opera" required></div></div>                     <div class="row mb-3">                            <label for="tipo_rol" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_rol")</label><div class="col-md-6"><input id="tipo_rol" type="text"  value="{{$registro->tipo_rol}}" class="form-control" name="tipo_rol" required></div></div>                     <div class="row mb-3">                            <label for="pagada" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepagada")</label><div class="col-md-6"><input id="pagada" type="text"  value="{{$registro->pagada}}" class="form-control" name="pagada" required></div></div>                     <div class="row mb-3">                            <label for="medico_prin" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico_prin")</label><div class="col-md-6"><input id="medico_prin" type="text"  value="{{$registro->medico_prin}}" class="form-control" name="medico_prin" required></div></div>                     <div class="row mb-3">                            <label for="medico_aux" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico_aux")</label><div class="col-md-6"><input id="medico_aux" type="text"  value="{{$registro->medico_aux}}" class="form-control" name="medico_aux" required></div></div>                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  value="{{$registro->historia}}" class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="diagnostico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namediagnostico")</label><div class="col-md-6"><input id="diagnostico" type="text"  value="{{$registro->diagnostico}}" class="form-control" name="diagnostico" required></div></div>                     <div class="row mb-3">                            <label for="monto_abono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_abono")</label><div class="col-md-6"><input id="monto_abono" type="text"  value="{{$registro->monto_abono}}" class="form-control" name="monto_abono" required></div></div>                     <div class="row mb-3">                            <label for="monto_resta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_resta")</label><div class="col-md-6"><input id="monto_resta" type="text"  value="{{$registro->monto_resta}}" class="form-control" name="monto_resta" required></div></div>                     <div class="row mb-3">                            <label for="empre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameempre")</label><div class="col-md-6"><input id="empre" type="text"  value="{{$registro->empre}}" class="form-control" name="empre" required></div></div>                     <div class="row mb-3">                            <label for="hora_fin" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora_fin")</label><div class="col-md-6"><input id="hora_fin" type="text"  value="{{$registro->hora_fin}}" class="form-control" name="hora_fin" required></div></div>                     <div class="row mb-3">                            <label for="duracion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameduracion")</label><div class="col-md-6"><input id="duracion" type="text"  value="{{$registro->duracion}}" class="form-control" name="duracion" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span> 
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
@endforeach
@endsection


