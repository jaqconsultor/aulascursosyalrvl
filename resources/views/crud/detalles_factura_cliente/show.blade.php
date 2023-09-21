@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerDetalles_factura_cliente')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="cod_inventario" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_inventario")</label><div class="col-md-6"><input id="cod_inventario" type="text" value="{{$registro->cod_inventario}}" class="form-control" name="cod_inventario" readonly></div></div>                     <div class="row mb-3">                            <label for="numfactura" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumfactura")</label><div class="col-md-6"><input id="numfactura" type="text" value="{{$registro->numfactura}}" class="form-control" name="numfactura" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo_articulo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_articulo")</label><div class="col-md-6"><input id="tipo_articulo" type="text" value="{{$registro->tipo_articulo}}" class="form-control" name="tipo_articulo" readonly></div></div>                     <div class="row mb-3">                            <label for="nombre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre")</label><div class="col-md-6"><input id="nombre" type="text" value="{{$registro->nombre}}" class="form-control" name="nombre" readonly></div></div>                     <div class="row mb-3">                            <label for="precio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprecio")</label><div class="col-md-6"><input id="precio" type="text" value="{{$registro->precio}}" class="form-control" name="precio" readonly></div></div>                     <div class="row mb-3">                            <label for="descuento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescuento")</label><div class="col-md-6"><input id="descuento" type="text" value="{{$registro->descuento}}" class="form-control" name="descuento" readonly></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text" value="{{$registro->cantidad}}" class="form-control" name="cantidad" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha_doc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_doc")</label><div class="col-md-6"><input id="fecha_doc" type="text" value="{{$registro->fecha_doc}}" class="form-control" name="fecha_doc" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo_precio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_precio")</label><div class="col-md-6"><input id="tipo_precio" type="text" value="{{$registro->tipo_precio}}" class="form-control" name="tipo_precio" readonly></div></div>                     <div class="row mb-3">                            <label for="total_articulo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_articulo")</label><div class="col-md-6"><input id="total_articulo" type="text" value="{{$registro->total_articulo}}" class="form-control" name="total_articulo" readonly></div></div>
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
