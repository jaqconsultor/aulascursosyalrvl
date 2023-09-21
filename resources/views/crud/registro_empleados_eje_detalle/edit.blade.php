@extends('layouts.app')
@section('content')
@foreach ($registros as $registro) 
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarRole')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('roles.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="nro_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_nomina")</label><div class="col-md-6"><input id="nro_nomina" type="text"  value="{{$registro->nro_nomina}}" class="form-control" name="nro_nomina" required></div></div>                     <div class="row mb-3">                            <label for="nro_empleado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_empleado")</label><div class="col-md-6"><input id="nro_empleado" type="text"  value="{{$registro->nro_empleado}}" class="form-control" name="nro_empleado" required></div></div>                     <div class="row mb-3">                            <label for="nro_cxp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_cxp")</label><div class="col-md-6"><input id="nro_cxp" type="text"  value="{{$registro->nro_cxp}}" class="form-control" name="nro_cxp" required></div></div>                     <div class="row mb-3">                            <label for="monto_empleado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_empleado")</label><div class="col-md-6"><input id="monto_empleado" type="text"  value="{{$registro->monto_empleado}}" class="form-control" name="monto_empleado" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span> 
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
@endforeach
@endsection


