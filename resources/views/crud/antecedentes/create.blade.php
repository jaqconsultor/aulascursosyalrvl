@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearAntecedentes')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="codantecedente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodantecedente")</label><div class="col-md-6"><input id="codantecedente" type="text"  class="form-control" name="codantecedente" required></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text"  class="form-control" name="descripcion" required></div></div>                     <div class="row mb-3">                            <label for="codtipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodtipo")</label><div class="col-md-6"><input id="codtipo" type="text"  class="form-control" name="codtipo" required></div></div>
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
