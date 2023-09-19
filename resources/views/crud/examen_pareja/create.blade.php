@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearExamen_pareja')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text"  class="form-control" name="nrohistoria" required></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text"  class="form-control" name="nroconsulta" required></div></div>                     <div class="row mb-3">                            <label for="codeexamen" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodeexamen")</label><div class="col-md-6"><input id="codeexamen" type="text"  class="form-control" name="codeexamen" required></div></div>                     <div class="row mb-3">                            <label for="orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorden")</label><div class="col-md-6"><input id="orden" type="text"  class="form-control" name="orden" required></div></div>                     <div class="row mb-3">                            <label for="cedula" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula")</label><div class="col-md-6"><input id="cedula" type="text"  class="form-control" name="cedula" required></div></div>                     <div class="row mb-3">                            <label for="nombre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre")</label><div class="col-md-6"><input id="nombre" type="text"  class="form-control" name="nombre" required></div></div>                     <div class="row mb-3">                            <label for="procedencia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprocedencia")</label><div class="col-md-6"><input id="procedencia" type="text"  class="form-control" name="procedencia" required></div></div>
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
