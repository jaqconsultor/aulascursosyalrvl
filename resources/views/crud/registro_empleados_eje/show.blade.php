@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerRegistro_empleados_eje')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nro_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_nomina")</label><div class="col-md-6"><input id="nro_nomina" type="text" value="{{$registro->nro_nomina}}" class="form-control" name="nro_nomina" readonly></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text" value="{{$registro->descripcion}}" class="form-control" name="descripcion" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha_aplicacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_aplicacion")</label><div class="col-md-6"><input id="fecha_aplicacion" type="text" value="{{$registro->fecha_aplicacion}}" class="form-control" name="fecha_aplicacion" readonly></div></div>                     <div class="row mb-3">                            <label for="status" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestatus")</label><div class="col-md-6"><input id="status" type="text" value="{{$registro->status}}" class="form-control" name="status" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_nomina")</label><div class="col-md-6"><input id="tipo_nomina" type="text" value="{{$registro->tipo_nomina}}" class="form-control" name="tipo_nomina" readonly></div></div>                     <div class="row mb-3">                            <label for="frecuencia_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefrecuencia_nomina")</label><div class="col-md-6"><input id="frecuencia_nomina" type="text" value="{{$registro->frecuencia_nomina}}" class="form-control" name="frecuencia_nomina" readonly></div></div>                     <div class="row mb-3">                            <label for="monto_total" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_total")</label><div class="col-md-6"><input id="monto_total" type="text" value="{{$registro->monto_total}}" class="form-control" name="monto_total" readonly></div></div>
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
