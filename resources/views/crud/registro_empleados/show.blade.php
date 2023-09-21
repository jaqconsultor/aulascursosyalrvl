@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerRegistro_empleados')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nro_empleado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_empleado")</label><div class="col-md-6"><input id="nro_empleado" type="text" value="{{$registro->nro_empleado}}" class="form-control" name="nro_empleado" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha_creacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_creacion")</label><div class="col-md-6"><input id="fecha_creacion" type="text" value="{{$registro->fecha_creacion}}" class="form-control" name="fecha_creacion" readonly></div></div>                     <div class="row mb-3">                            <label for="status" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestatus")</label><div class="col-md-6"><input id="status" type="text" value="{{$registro->status}}" class="form-control" name="status" readonly></div></div>                     <div class="row mb-3">                            <label for="cedula_empleado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula_empleado")</label><div class="col-md-6"><input id="cedula_empleado" type="text" value="{{$registro->cedula_empleado}}" class="form-control" name="cedula_empleado" readonly></div></div>                     <div class="row mb-3">                            <label for="nombre_empleado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre_empleado")</label><div class="col-md-6"><input id="nombre_empleado" type="text" value="{{$registro->nombre_empleado}}" class="form-control" name="nombre_empleado" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_nomina")</label><div class="col-md-6"><input id="tipo_nomina" type="text" value="{{$registro->tipo_nomina}}" class="form-control" name="tipo_nomina" readonly></div></div>                     <div class="row mb-3">                            <label for="frecuencia_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefrecuencia_nomina")</label><div class="col-md-6"><input id="frecuencia_nomina" type="text" value="{{$registro->frecuencia_nomina}}" class="form-control" name="frecuencia_nomina" readonly></div></div>                     <div class="row mb-3">                            <label for="monto_s1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_s1")</label><div class="col-md-6"><input id="monto_s1" type="text" value="{{$registro->monto_s1}}" class="form-control" name="monto_s1" readonly></div></div>                     <div class="row mb-3">                            <label for="monto_s2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_s2")</label><div class="col-md-6"><input id="monto_s2" type="text" value="{{$registro->monto_s2}}" class="form-control" name="monto_s2" readonly></div></div>                     <div class="row mb-3">                            <label for="monto_s3" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_s3")</label><div class="col-md-6"><input id="monto_s3" type="text" value="{{$registro->monto_s3}}" class="form-control" name="monto_s3" readonly></div></div>                     <div class="row mb-3">                            <label for="monto_s4" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_s4")</label><div class="col-md-6"><input id="monto_s4" type="text" value="{{$registro->monto_s4}}" class="form-control" name="monto_s4" readonly></div></div>                     <div class="row mb-3">                            <label for="monto_total" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_total")</label><div class="col-md-6"><input id="monto_total" type="text" value="{{$registro->monto_total}}" class="form-control" name="monto_total" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span>
</a>
</div>
</div>
</p>
</div>
<div class="card-footer">
</div>
</div>
</div>
</div>
@endforeach
@endsection
