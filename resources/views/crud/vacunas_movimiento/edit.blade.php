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
                     <div class="row mb-3">                            <label for="vacuna" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namevacuna")</label><div class="col-md-6"><input id="vacuna" type="text"  value="{{$registro->vacuna}}" class="form-control" name="vacuna" required></div></div>                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  value="{{$registro->historia}}" class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  value="{{$registro->consulta}}" class="form-control" name="consulta" required></div></div>                     <div class="row mb-3">                            <label for="dosis" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedosis")</label><div class="col-md-6"><input id="dosis" type="text"  value="{{$registro->dosis}}" class="form-control" name="dosis" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  value="{{$registro->fecha}}" class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="descri_vacuna" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescri_vacuna")</label><div class="col-md-6"><input id="descri_vacuna" type="text"  value="{{$registro->descri_vacuna}}" class="form-control" name="descri_vacuna" required></div></div>                     <div class="row mb-3">                            <label for="descri_paciente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescri_paciente")</label><div class="col-md-6"><input id="descri_paciente" type="text"  value="{{$registro->descri_paciente}}" class="form-control" name="descri_paciente" required></div></div>                     <div class="row mb-3">                            <label for="empresa" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameempresa")</label><div class="col-md-6"><input id="empresa" type="text"  value="{{$registro->empresa}}" class="form-control" name="empresa" required></div></div>                     <div class="row mb-3">                            <label for="disponible" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedisponible")</label><div class="col-md-6"><input id="disponible" type="text"  value="{{$registro->disponible}}" class="form-control" name="disponible" required></div></div>                     <div class="row mb-3">                            <label for="precio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprecio")</label><div class="col-md-6"><input id="precio" type="text"  value="{{$registro->precio}}" class="form-control" name="precio" required></div></div>
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


