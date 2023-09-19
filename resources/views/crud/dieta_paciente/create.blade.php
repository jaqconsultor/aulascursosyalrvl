@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearDieta_paciente')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="histroria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistroria")</label><div class="col-md-6"><input id="histroria" type="text"  class="form-control" name="histroria" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  class="form-control" name="consulta" required></div></div>                     <div class="row mb-3">                            <label for="cod_dieta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_dieta")</label><div class="col-md-6"><input id="cod_dieta" type="text"  class="form-control" name="cod_dieta" required></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text"  class="form-control" name="descripcion" required></div></div>                     <div class="row mb-3">                            <label for="ejecutada" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameejecutada")</label><div class="col-md-6"><input id="ejecutada" type="text"  class="form-control" name="ejecutada" required></div></div>                     <div class="row mb-3">                            <label for="calorias" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecalorias")</label><div class="col-md-6"><input id="calorias" type="text"  class="form-control" name="calorias" required></div></div>                     <div class="row mb-3">                            <label for="dieta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedieta")</label><div class="col-md-6"><input id="dieta" type="text"  class="form-control" name="dieta" required></div></div>
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
