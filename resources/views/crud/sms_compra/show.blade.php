@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerSms_compra')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="conse_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconse_compra")</label><div class="col-md-6"><input id="conse_compra" type="text" value="{{$registro->conse_compra}}" class="form-control" name="conse_compra" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha_compra")</label><div class="col-md-6"><input id="fecha_compra" type="text" value="{{$registro->fecha_compra}}" class="form-control" name="fecha_compra" readonly></div></div>                     <div class="row mb-3">                            <label for="monto_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto_compra")</label><div class="col-md-6"><input id="monto_compra" type="text" value="{{$registro->monto_compra}}" class="form-control" name="monto_compra" readonly></div></div>                     <div class="row mb-3">                            <label for="cantidad_compra" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad_compra")</label><div class="col-md-6"><input id="cantidad_compra" type="text" value="{{$registro->cantidad_compra}}" class="form-control" name="cantidad_compra" readonly></div></div>
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
