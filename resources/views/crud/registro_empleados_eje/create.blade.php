@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearRegistro_empleados_eje')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="nro_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_nomina")</label><div class="col-md-6"><input id="nro_nomina" type="text"  class="form-control" name="nro_nomina" required></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text"  class="form-control" name="descripcion" required></div></div>                     <div class="row mb-3">                            <label for="fecha_aplicacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_aplicacion")</label><div class="col-md-6"><input id="fecha_aplicacion" type="text"  class="form-control" name="fecha_aplicacion" required></div></div>                     <div class="row mb-3">                            <label for="status" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestatus")</label><div class="col-md-6"><input id="status" type="text"  class="form-control" name="status" required></div></div>                     <div class="row mb-3">                            <label for="tipo_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_nomina")</label><div class="col-md-6"><input id="tipo_nomina" type="text"  class="form-control" name="tipo_nomina" required></div></div>                     <div class="row mb-3">                            <label for="frecuencia_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefrecuencia_nomina")</label><div class="col-md-6"><input id="frecuencia_nomina" type="text"  class="form-control" name="frecuencia_nomina" required></div></div>                     <div class="row mb-3">                            <label for="monto_total" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_total")</label><div class="col-md-6"><input id="monto_total" type="text"  class="form-control" name="monto_total" required></div></div>
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
