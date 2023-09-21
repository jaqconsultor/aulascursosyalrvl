@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearDias_semana')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="dia_semana" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedia_semana")</label><div class="col-md-6"><input id="dia_semana" type="text"  class="form-control" name="dia_semana" required></div></div>                     <div class="row mb-3">                            <label for="semana" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesemana")</label><div class="col-md-6"><input id="semana" type="text"  class="form-control" name="semana" required></div></div>                     <div class="row mb-3">                            <label for="ano" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameano")</label><div class="col-md-6"><input id="ano" type="text"  class="form-control" name="ano" required></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text"  class="form-control" name="descripcion" required></div></div>                     <div class="row mb-3">                            <label for="tipo_dia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_dia")</label><div class="col-md-6"><input id="tipo_dia" type="text"  class="form-control" name="tipo_dia" required></div></div>
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
