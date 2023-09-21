@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearSms_compra')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="conse_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconse_compra")</label><div class="col-md-6"><input id="conse_compra" type="text"  class="form-control" name="conse_compra" required></div></div>                     <div class="row mb-3">                            <label for="fecha_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_compra")</label><div class="col-md-6"><input id="fecha_compra" type="text"  class="form-control" name="fecha_compra" required></div></div>                     <div class="row mb-3">                            <label for="monto_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_compra")</label><div class="col-md-6"><input id="monto_compra" type="text"  class="form-control" name="monto_compra" required></div></div>                     <div class="row mb-3">                            <label for="cantidad_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad_compra")</label><div class="col-md-6"><input id="cantidad_compra" type="text"  class="form-control" name="cantidad_compra" required></div></div>
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
