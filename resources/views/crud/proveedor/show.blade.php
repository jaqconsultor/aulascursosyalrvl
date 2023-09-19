@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerProveedor')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="cod_prov" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_prov")</label><div class="col-md-6"><input id="cod_prov" type="text" value="{{$registro->cod_prov}}" class="form-control" name="cod_prov" readonly></div></div>                     <div class="row mb-3">                            <label for="proveedor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameproveedor")</label><div class="col-md-6"><input id="proveedor" type="text" value="{{$registro->proveedor}}" class="form-control" name="proveedor" readonly></div></div>                     <div class="row mb-3">                            <label for="rif" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerif")</label><div class="col-md-6"><input id="rif" type="text" value="{{$registro->rif}}" class="form-control" name="rif" readonly></div></div>                     <div class="row mb-3">                            <label for="direccion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedireccion")</label><div class="col-md-6"><input id="direccion" type="text" value="{{$registro->direccion}}" class="form-control" name="direccion" readonly></div></div>                     <div class="row mb-3">                            <label for="telefono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono")</label><div class="col-md-6"><input id="telefono" type="text" value="{{$registro->telefono}}" class="form-control" name="telefono" readonly></div></div>                     <div class="row mb-3">                            <label for="contacto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecontacto")</label><div class="col-md-6"><input id="contacto" type="text" value="{{$registro->contacto}}" class="form-control" name="contacto" readonly></div></div>                     <div class="row mb-3">                            <label for="celular" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecelular")</label><div class="col-md-6"><input id="celular" type="text" value="{{$registro->celular}}" class="form-control" name="celular" readonly></div></div>
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
