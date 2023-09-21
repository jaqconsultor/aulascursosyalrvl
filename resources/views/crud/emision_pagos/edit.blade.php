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
                     <div class="row mb-3">                            <label for="nro_emision" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_emision")</label><div class="col-md-6"><input id="nro_emision" type="text"  value="{{$registro->nro_emision}}" class="form-control" name="nro_emision" required></div></div>                     <div class="row mb-3">                            <label for="fecha_emision" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_emision")</label><div class="col-md-6"><input id="fecha_emision" type="text"  value="{{$registro->fecha_emision}}" class="form-control" name="fecha_emision" required></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text"  value="{{$registro->descripcion}}" class="form-control" name="descripcion" required></div></div>                     <div class="row mb-3">                            <label for="cod_banco" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_banco")</label><div class="col-md-6"><input id="cod_banco" type="text"  value="{{$registro->cod_banco}}" class="form-control" name="cod_banco" required></div></div>                     <div class="row mb-3">                            <label for="estado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestado")</label><div class="col-md-6"><input id="estado" type="text"  value="{{$registro->estado}}" class="form-control" name="estado" required></div></div>                     <div class="row mb-3">                            <label for="monto_pagar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_pagar")</label><div class="col-md-6"><input id="monto_pagar" type="text"  value="{{$registro->monto_pagar}}" class="form-control" name="monto_pagar" required></div></div>
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


