@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearRecipe_detalle')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text"  class="form-control" name="nrohistoria" required></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text"  class="form-control" name="nroconsulta" required></div></div>                     <div class="row mb-3">                            <label for="recipe" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerecipe")</label><div class="col-md-6"><input id="recipe" type="text"  class="form-control" name="recipe" required></div></div>                     <div class="row mb-3">                            <label for="fe_emision" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefe_emision")</label><div class="col-md-6"><input id="fe_emision" type="text"  class="form-control" name="fe_emision" required></div></div>                     <div class="row mb-3">                            <label for="fe_vence" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefe_vence")</label><div class="col-md-6"><input id="fe_vence" type="text"  class="form-control" name="fe_vence" required></div></div>                     <div class="row mb-3">                            <label for="nota" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenota")</label><div class="col-md-6"><input id="nota" type="text"  class="form-control" name="nota" required></div></div>
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
