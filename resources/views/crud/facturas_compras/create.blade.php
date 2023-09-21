@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearFacturas_compras')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="id_factura_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_factura_compra")</label><div class="col-md-6"><input id="id_factura_compra" type="text"  class="form-control" name="id_factura_compra" required></div></div>                     <div class="row mb-3">                            <label for="cod_prov" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_prov")</label><div class="col-md-6"><input id="cod_prov" type="text"  class="form-control" name="cod_prov" required></div></div>                     <div class="row mb-3">                            <label for="id_tipo_concepto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_tipo_concepto")</label><div class="col-md-6"><input id="id_tipo_concepto" type="text"  class="form-control" name="id_tipo_concepto" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="estado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestado")</label><div class="col-md-6"><input id="estado" type="text"  class="form-control" name="estado" required></div></div>                     <div class="row mb-3">                            <label for="nro_seniat" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_seniat")</label><div class="col-md-6"><input id="nro_seniat" type="text"  class="form-control" name="nro_seniat" required></div></div>                     <div class="row mb-3">                            <label for="nro_factura" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_factura")</label><div class="col-md-6"><input id="nro_factura" type="text"  class="form-control" name="nro_factura" required></div></div>                     <div class="row mb-3">                            <label for="mto_neto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_neto")</label><div class="col-md-6"><input id="mto_neto" type="text"  class="form-control" name="mto_neto" required></div></div>                     <div class="row mb-3">                            <label for="mto_porc_iva" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_porc_iva")</label><div class="col-md-6"><input id="mto_porc_iva" type="text"  class="form-control" name="mto_porc_iva" required></div></div>                     <div class="row mb-3">                            <label for="mto_iva" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_iva")</label><div class="col-md-6"><input id="mto_iva" type="text"  class="form-control" name="mto_iva" required></div></div>                     <div class="row mb-3">                            <label for="mto_porc_ret_iva" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_porc_ret_iva")</label><div class="col-md-6"><input id="mto_porc_ret_iva" type="text"  class="form-control" name="mto_porc_ret_iva" required></div></div>                     <div class="row mb-3">                            <label for="mto_ret_iva" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_ret_iva")</label><div class="col-md-6"><input id="mto_ret_iva" type="text"  class="form-control" name="mto_ret_iva" required></div></div>                     <div class="row mb-3">                            <label for="mto_porc_ret_isrl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_porc_ret_isrl")</label><div class="col-md-6"><input id="mto_porc_ret_isrl" type="text"  class="form-control" name="mto_porc_ret_isrl" required></div></div>                     <div class="row mb-3">                            <label for="mto_ret_isrl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_ret_isrl")</label><div class="col-md-6"><input id="mto_ret_isrl" type="text"  class="form-control" name="mto_ret_isrl" required></div></div>                     <div class="row mb-3">                            <label for="mto_total_general" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_total_general")</label><div class="col-md-6"><input id="mto_total_general" type="text"  class="form-control" name="mto_total_general" required></div></div>                     <div class="row mb-3">                            <label for="nro_cxp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenro_cxp")</label><div class="col-md-6"><input id="nro_cxp" type="text"  class="form-control" name="nro_cxp" required></div></div>                     <div class="row mb-3">                            <label for="mto_total" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemto_total")</label><div class="col-md-6"><input id="mto_total" type="text"  class="form-control" name="mto_total" required></div></div>
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
