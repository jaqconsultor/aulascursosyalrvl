@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearDetalles_factura_cliente_copy')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="cod_inventario" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_inventario")</label><div class="col-md-6"><input id="cod_inventario" type="text"  class="form-control" name="cod_inventario" required></div></div>                     <div class="row mb-3">                            <label for="numfactura" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumfactura")</label><div class="col-md-6"><input id="numfactura" type="text"  class="form-control" name="numfactura" required></div></div>                     <div class="row mb-3">                            <label for="tipo_articulo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_articulo")</label><div class="col-md-6"><input id="tipo_articulo" type="text"  class="form-control" name="tipo_articulo" required></div></div>                     <div class="row mb-3">                            <label for="nombre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre")</label><div class="col-md-6"><input id="nombre" type="text"  class="form-control" name="nombre" required></div></div>                     <div class="row mb-3">                            <label for="precio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprecio")</label><div class="col-md-6"><input id="precio" type="text"  class="form-control" name="precio" required></div></div>                     <div class="row mb-3">                            <label for="descuento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescuento")</label><div class="col-md-6"><input id="descuento" type="text"  class="form-control" name="descuento" required></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text"  class="form-control" name="cantidad" required></div></div>                     <div class="row mb-3">                            <label for="fecha_doc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_doc")</label><div class="col-md-6"><input id="fecha_doc" type="text"  class="form-control" name="fecha_doc" required></div></div>                     <div class="row mb-3">                            <label for="tipo_precio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_precio")</label><div class="col-md-6"><input id="tipo_precio" type="text"  class="form-control" name="tipo_precio" required></div></div>                     <div class="row mb-3">                            <label for="total_articulo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_articulo")</label><div class="col-md-6"><input id="total_articulo" type="text"  class="form-control" name="total_articulo" required></div></div>                     <div class="row mb-3">                            <label for="medico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico")</label><div class="col-md-6"><input id="medico" type="text"  class="form-control" name="medico" required></div></div>                     <div class="row mb-3">                            <label for="estatus" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestatus")</label><div class="col-md-6"><input id="estatus" type="text"  class="form-control" name="estatus" required></div></div>
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
