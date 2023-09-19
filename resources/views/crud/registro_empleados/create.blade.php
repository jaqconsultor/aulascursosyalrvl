@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearRegistro_empleados')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="nro_empleado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_empleado")</label><div class="col-md-6"><input id="nro_empleado" type="text"  class="form-control" name="nro_empleado" required></div></div>                     <div class="row mb-3">                            <label for="fecha_creacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_creacion")</label><div class="col-md-6"><input id="fecha_creacion" type="text"  class="form-control" name="fecha_creacion" required></div></div>                     <div class="row mb-3">                            <label for="status" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestatus")</label><div class="col-md-6"><input id="status" type="text"  class="form-control" name="status" required></div></div>                     <div class="row mb-3">                            <label for="cedula_empleado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula_empleado")</label><div class="col-md-6"><input id="cedula_empleado" type="text"  class="form-control" name="cedula_empleado" required></div></div>                     <div class="row mb-3">                            <label for="nombre_empleado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre_empleado")</label><div class="col-md-6"><input id="nombre_empleado" type="text"  class="form-control" name="nombre_empleado" required></div></div>                     <div class="row mb-3">                            <label for="tipo_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_nomina")</label><div class="col-md-6"><input id="tipo_nomina" type="text"  class="form-control" name="tipo_nomina" required></div></div>                     <div class="row mb-3">                            <label for="frecuencia_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefrecuencia_nomina")</label><div class="col-md-6"><input id="frecuencia_nomina" type="text"  class="form-control" name="frecuencia_nomina" required></div></div>                     <div class="row mb-3">                            <label for="monto_s1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_s1")</label><div class="col-md-6"><input id="monto_s1" type="text"  class="form-control" name="monto_s1" required></div></div>                     <div class="row mb-3">                            <label for="monto_s2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_s2")</label><div class="col-md-6"><input id="monto_s2" type="text"  class="form-control" name="monto_s2" required></div></div>                     <div class="row mb-3">                            <label for="monto_s3" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_s3")</label><div class="col-md-6"><input id="monto_s3" type="text"  class="form-control" name="monto_s3" required></div></div>                     <div class="row mb-3">                            <label for="monto_s4" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_s4")</label><div class="col-md-6"><input id="monto_s4" type="text"  class="form-control" name="monto_s4" required></div></div>                     <div class="row mb-3">                            <label for="monto_total" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_total")</label><div class="col-md-6"><input id="monto_total" type="text"  class="form-control" name="monto_total" required></div></div>
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
