@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearCuentas_x_pagar_mov')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="nro_registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_registro")</label><div class="col-md-6"><input id="nro_registro" type="text"  class="form-control" name="nro_registro" required></div></div>                     <div class="row mb-3">                            <label for="nro_cxp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_cxp")</label><div class="col-md-6"><input id="nro_cxp" type="text"  class="form-control" name="nro_cxp" required></div></div>                     <div class="row mb-3">                            <label for="nro_mov" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_mov")</label><div class="col-md-6"><input id="nro_mov" type="text"  class="form-control" name="nro_mov" required></div></div>                     <div class="row mb-3">                            <label for="fecha_emision" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_emision")</label><div class="col-md-6"><input id="fecha_emision" type="text"  class="form-control" name="fecha_emision" required></div></div>                     <div class="row mb-3">                            <label for="nro_documento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_documento")</label><div class="col-md-6"><input id="nro_documento" type="text"  class="form-control" name="nro_documento" required></div></div>                     <div class="row mb-3">                            <label for="tip_documento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametip_documento")</label><div class="col-md-6"><input id="tip_documento" type="text"  class="form-control" name="tip_documento" required></div></div>                     <div class="row mb-3">                            <label for="monto_pagar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_pagar")</label><div class="col-md-6"><input id="monto_pagar" type="text"  class="form-control" name="monto_pagar" required></div></div>
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
