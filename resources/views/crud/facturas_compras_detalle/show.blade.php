@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerFacturas_compras_detalle')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="id_registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_registro")</label><div class="col-md-6"><input id="id_registro" type="text" value="{{$registro->id_registro}}" class="form-control" name="id_registro" readonly></div></div>                     <div class="row mb-3">                            <label for="id_fac_prov" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_fac_prov")</label><div class="col-md-6"><input id="id_fac_prov" type="text" value="{{$registro->id_fac_prov}}" class="form-control" name="id_fac_prov" readonly></div></div>                     <div class="row mb-3">                            <label for="des_concepto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedes_concepto")</label><div class="col-md-6"><input id="des_concepto" type="text" value="{{$registro->des_concepto}}" class="form-control" name="des_concepto" readonly></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text" value="{{$registro->cantidad}}" class="form-control" name="cantidad" readonly></div></div>                     <div class="row mb-3">                            <label for="monto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto")</label><div class="col-md-6"><input id="monto" type="text" value="{{$registro->monto}}" class="form-control" name="monto" readonly></div></div>                     <div class="row mb-3">                            <label for="monto_total" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_total")</label><div class="col-md-6"><input id="monto_total" type="text" value="{{$registro->monto_total}}" class="form-control" name="monto_total" readonly></div></div>                     <div class="row mb-3">                            <label for="id_factura_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_factura_compra")</label><div class="col-md-6"><input id="id_factura_compra" type="text" value="{{$registro->id_factura_compra}}" class="form-control" name="id_factura_compra" readonly></div></div>
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
