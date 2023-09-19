@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearRadiologias')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="coderadio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecoderadio")</label><div class="col-md-6"><input id="coderadio" type="text"  class="form-control" name="coderadio" required></div></div>                     <div class="row mb-3">                            <label for="estudio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestudio")</label><div class="col-md-6"><input id="estudio" type="text"  class="form-control" name="estudio" required></div></div>                     <div class="row mb-3">                            <label for="codetipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodetipo")</label><div class="col-md-6"><input id="codetipo" type="text"  class="form-control" name="codetipo" required></div></div>                     <div class="row mb-3">                            <label for="opciones" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameopciones")</label><div class="col-md-6"><input id="opciones" type="text"  class="form-control" name="opciones" required></div></div>                     <div class="row mb-3">                            <label for="tipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo")</label><div class="col-md-6"><input id="tipo" type="text"  class="form-control" name="tipo" required></div></div>
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
