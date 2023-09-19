@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearRegistro_empleados_eje_detalle')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="nro_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_nomina")</label><div class="col-md-6"><input id="nro_nomina" type="text"  class="form-control" name="nro_nomina" required></div></div>                     <div class="row mb-3">                            <label for="nro_empleado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_empleado")</label><div class="col-md-6"><input id="nro_empleado" type="text"  class="form-control" name="nro_empleado" required></div></div>                     <div class="row mb-3">                            <label for="nro_cxp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_cxp")</label><div class="col-md-6"><input id="nro_cxp" type="text"  class="form-control" name="nro_cxp" required></div></div>                     <div class="row mb-3">                            <label for="monto_empleado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_empleado")</label><div class="col-md-6"><input id="monto_empleado" type="text"  class="form-control" name="monto_empleado" required></div></div>
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
