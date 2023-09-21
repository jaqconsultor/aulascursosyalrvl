@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearPresupuesto_planti')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="consecutivo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsecutivo")</label><div class="col-md-6"><input id="consecutivo" type="text"  class="form-control" name="consecutivo" required></div></div>                     <div class="row mb-3">                            <label for="tipo_precio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_precio")</label><div class="col-md-6"><input id="tipo_precio" type="text"  class="form-control" name="tipo_precio" required></div></div>                     <div class="row mb-3">                            <label for="total_costo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_costo")</label><div class="col-md-6"><input id="total_costo" type="text"  class="form-control" name="total_costo" required></div></div>                     <div class="row mb-3">                            <label for="total_final" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_final")</label><div class="col-md-6"><input id="total_final" type="text"  class="form-control" name="total_final" required></div></div>                     <div class="row mb-3">                            <label for="notas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenotas")</label><div class="col-md-6"><input id="notas" type="text"  class="form-control" name="notas" required></div></div>                     <div class="row mb-3">                            <label for="tipo_doc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_doc")</label><div class="col-md-6"><input id="tipo_doc" type="text"  class="form-control" name="tipo_doc" required></div></div>                     <div class="row mb-3">                            <label for="nom_presupuesto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenom_presupuesto")</label><div class="col-md-6"><input id="nom_presupuesto" type="text"  class="form-control" name="nom_presupuesto" required></div></div>
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
