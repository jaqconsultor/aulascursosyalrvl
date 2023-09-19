@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearImagen_pacientes')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text"  class="form-control" name="nrohistoria" required></div></div>                     <div class="row mb-3">                            <label for="imagen" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimagen")</label><div class="col-md-6"><input id="imagen" type="text"  class="form-control" name="imagen" required></div></div>                     <div class="row mb-3">                            <label for="imagen2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameimagen2")</label><div class="col-md-6"><input id="imagen2" type="text"  class="form-control" name="imagen2" required></div></div>
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
