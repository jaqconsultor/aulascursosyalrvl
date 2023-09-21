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
                     <div class="row mb-3">                            <label for="id_factura_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_factura_compra")</label><div class="col-md-6"><input id="id_factura_compra" type="text"  value="{{$registro->id_factura_compra}}" class="form-control" name="id_factura_compra" required></div></div>                     <div class="row mb-3">                            <label for="cod_prov" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_prov")</label><div class="col-md-6"><input id="cod_prov" type="text"  value="{{$registro->cod_prov}}" class="form-control" name="cod_prov" required></div></div>                     <div class="row mb-3">                            <label for="id_tipo_concepto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_tipo_concepto")</label><div class="col-md-6"><input id="id_tipo_concepto" type="text"  value="{{$registro->id_tipo_concepto}}" class="form-control" name="id_tipo_concepto" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  value="{{$registro->fecha}}" class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="estado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestado")</label><div class="col-md-6"><input id="estado" type="text"  value="{{$registro->estado}}" class="form-control" name="estado" required></div></div>                     <div class="row mb-3">                            <label for="nro_seniat" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_seniat")</label><div class="col-md-6"><input id="nro_seniat" type="text"  value="{{$registro->nro_seniat}}" class="form-control" name="nro_seniat" required></div></div>                     <div class="row mb-3">                            <label for="nro_factura" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_factura")</label><div class="col-md-6"><input id="nro_factura" type="text"  value="{{$registro->nro_factura}}" class="form-control" name="nro_factura" required></div></div>                     <div class="row mb-3">                            <label for="mto_neto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_neto")</label><div class="col-md-6"><input id="mto_neto" type="text"  value="{{$registro->mto_neto}}" class="form-control" name="mto_neto" required></div></div>                     <div class="row mb-3">                            <label for="mto_porc_iva" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_porc_iva")</label><div class="col-md-6"><input id="mto_porc_iva" type="text"  value="{{$registro->mto_porc_iva}}" class="form-control" name="mto_porc_iva" required></div></div>                     <div class="row mb-3">                            <label for="mto_iva" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_iva")</label><div class="col-md-6"><input id="mto_iva" type="text"  value="{{$registro->mto_iva}}" class="form-control" name="mto_iva" required></div></div>                     <div class="row mb-3">                            <label for="mto_porc_ret_iva" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_porc_ret_iva")</label><div class="col-md-6"><input id="mto_porc_ret_iva" type="text"  value="{{$registro->mto_porc_ret_iva}}" class="form-control" name="mto_porc_ret_iva" required></div></div>                     <div class="row mb-3">                            <label for="mto_ret_iva" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_ret_iva")</label><div class="col-md-6"><input id="mto_ret_iva" type="text"  value="{{$registro->mto_ret_iva}}" class="form-control" name="mto_ret_iva" required></div></div>                     <div class="row mb-3">                            <label for="mto_porc_ret_isrl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_porc_ret_isrl")</label><div class="col-md-6"><input id="mto_porc_ret_isrl" type="text"  value="{{$registro->mto_porc_ret_isrl}}" class="form-control" name="mto_porc_ret_isrl" required></div></div>                     <div class="row mb-3">                            <label for="mto_ret_isrl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_ret_isrl")</label><div class="col-md-6"><input id="mto_ret_isrl" type="text"  value="{{$registro->mto_ret_isrl}}" class="form-control" name="mto_ret_isrl" required></div></div>                     <div class="row mb-3">                            <label for="mto_total_general" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_total_general")</label><div class="col-md-6"><input id="mto_total_general" type="text"  value="{{$registro->mto_total_general}}" class="form-control" name="mto_total_general" required></div></div>                     <div class="row mb-3">                            <label for="nro_cxp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_cxp")</label><div class="col-md-6"><input id="nro_cxp" type="text"  value="{{$registro->nro_cxp}}" class="form-control" name="nro_cxp" required></div></div>                     <div class="row mb-3">                            <label for="mto_total" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_total")</label><div class="col-md-6"><input id="mto_total" type="text"  value="{{$registro->mto_total}}" class="form-control" name="mto_total" required></div></div>
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


