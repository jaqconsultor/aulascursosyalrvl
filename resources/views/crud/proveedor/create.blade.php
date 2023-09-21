@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearProveedor')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="cod_prov" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_prov")</label><div class="col-md-6"><input id="cod_prov" type="text"  class="form-control" name="cod_prov" required></div></div>                     <div class="row mb-3">                            <label for="proveedor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameproveedor")</label><div class="col-md-6"><input id="proveedor" type="text"  class="form-control" name="proveedor" required></div></div>                     <div class="row mb-3">                            <label for="rif" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerif")</label><div class="col-md-6"><input id="rif" type="text"  class="form-control" name="rif" required></div></div>                     <div class="row mb-3">                            <label for="direccion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedireccion")</label><div class="col-md-6"><input id="direccion" type="text"  class="form-control" name="direccion" required></div></div>                     <div class="row mb-3">                            <label for="telefono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono")</label><div class="col-md-6"><input id="telefono" type="text"  class="form-control" name="telefono" required></div></div>                     <div class="row mb-3">                            <label for="contacto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecontacto")</label><div class="col-md-6"><input id="contacto" type="text"  class="form-control" name="contacto" required></div></div>                     <div class="row mb-3">                            <label for="celular" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecelular")</label><div class="col-md-6"><input id="celular" type="text"  class="form-control" name="celular" required></div></div>
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
