@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearUltra_tiroides_musculo')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  class="form-control" name="consulta" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="transductor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametransductor")</label><div class="col-md-6"><input id="transductor" type="text"  class="form-control" name="transductor" required></div></div>                     <div class="row mb-3">                            <label for="referido" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereferido")</label><div class="col-md-6"><input id="referido" type="text"  class="form-control" name="referido" required></div></div>                     <div class="row mb-3">                            <label for="texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametexto")</label><div class="col-md-6"><input id="texto" type="text"  class="form-control" name="texto" required></div></div>                     <div class="row mb-3">                            <label for="puro_texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepuro_texto")</label><div class="col-md-6"><input id="puro_texto" type="text"  class="form-control" name="puro_texto" required></div></div>                     <div class="row mb-3">                            <label for="conclusiones" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconclusiones")</label><div class="col-md-6"><input id="conclusiones" type="text"  class="form-control" name="conclusiones" required></div></div>
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
