@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearPaciente_no_regi')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameregistro")</label><div class="col-md-6"><input id="registro" type="text"  class="form-control" name="registro" required></div></div>                     <div class="row mb-3">                            <label for="apellidos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameapellidos")</label><div class="col-md-6"><input id="apellidos" type="text"  class="form-control" name="apellidos" required></div></div>                     <div class="row mb-3">                            <label for="nombres" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombres")</label><div class="col-md-6"><input id="nombres" type="text"  class="form-control" name="nombres" required></div></div>                     <div class="row mb-3">                            <label for="celular" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecelular")</label><div class="col-md-6"><input id="celular" type="text"  class="form-control" name="celular" required></div></div>                     <div class="row mb-3">                            <label for="motivo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemotivo")</label><div class="col-md-6"><input id="motivo" type="text"  class="form-control" name="motivo" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="medico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico")</label><div class="col-md-6"><input id="medico" type="text"  class="form-control" name="medico" required></div></div>                     <div class="row mb-3">                            <label for="registrado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameregistrado")</label><div class="col-md-6"><input id="registrado" type="text"  class="form-control" name="registrado" required></div></div>                     <div class="row mb-3">                            <label for="hora" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora")</label><div class="col-md-6"><input id="hora" type="text"  class="form-control" name="hora" required></div></div>
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
