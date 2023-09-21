@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerEmision_pagos_detalle')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nro_registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_registro")</label><div class="col-md-6"><input id="nro_registro" type="text" value="{{$registro->nro_registro}}" class="form-control" name="nro_registro" readonly></div></div>                     <div class="row mb-3">                            <label for="nro_emision" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_emision")</label><div class="col-md-6"><input id="nro_emision" type="text" value="{{$registro->nro_emision}}" class="form-control" name="nro_emision" readonly></div></div>                     <div class="row mb-3">                            <label for="nro_cxp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_cxp")</label><div class="col-md-6"><input id="nro_cxp" type="text" value="{{$registro->nro_cxp}}" class="form-control" name="nro_cxp" readonly></div></div>                     <div class="row mb-3">                            <label for="nro_mov" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_mov")</label><div class="col-md-6"><input id="nro_mov" type="text" value="{{$registro->nro_mov}}" class="form-control" name="nro_mov" readonly></div></div>                     <div class="row mb-3">                            <label for="origen_cxp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorigen_cxp")</label><div class="col-md-6"><input id="origen_cxp" type="text" value="{{$registro->origen_cxp}}" class="form-control" name="origen_cxp" readonly></div></div>                     <div class="row mb-3">                            <label for="cxp_codigo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecxp_codigo")</label><div class="col-md-6"><input id="cxp_codigo" type="text" value="{{$registro->cxp_codigo}}" class="form-control" name="cxp_codigo" readonly></div></div>                     <div class="row mb-3">                            <label for="cxp_descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecxp_descripcion")</label><div class="col-md-6"><input id="cxp_descripcion" type="text" value="{{$registro->cxp_descripcion}}" class="form-control" name="cxp_descripcion" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha_emision" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_emision")</label><div class="col-md-6"><input id="fecha_emision" type="text" value="{{$registro->fecha_emision}}" class="form-control" name="fecha_emision" readonly></div></div>                     <div class="row mb-3">                            <label for="nro_documento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_documento")</label><div class="col-md-6"><input id="nro_documento" type="text" value="{{$registro->nro_documento}}" class="form-control" name="nro_documento" readonly></div></div>                     <div class="row mb-3">                            <label for="tip_documento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametip_documento")</label><div class="col-md-6"><input id="tip_documento" type="text" value="{{$registro->tip_documento}}" class="form-control" name="tip_documento" readonly></div></div>                     <div class="row mb-3">                            <label for="saldo_pagar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesaldo_pagar")</label><div class="col-md-6"><input id="saldo_pagar" type="text" value="{{$registro->saldo_pagar}}" class="form-control" name="saldo_pagar" readonly></div></div>                     <div class="row mb-3">                            <label for="monto_pagar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_pagar")</label><div class="col-md-6"><input id="monto_pagar" type="text" value="{{$registro->monto_pagar}}" class="form-control" name="monto_pagar" readonly></div></div>                     <div class="row mb-3">                            <label for="estado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestado")</label><div class="col-md-6"><input id="estado" type="text" value="{{$registro->estado}}" class="form-control" name="estado" readonly></div></div>
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
