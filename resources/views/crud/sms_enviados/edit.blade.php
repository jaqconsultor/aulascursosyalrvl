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
                     <div class="row mb-3">                            <label for="conta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconta")</label><div class="col-md-6"><input id="conta" type="text"  value="{{$registro->conta}}" class="form-control" name="conta" required></div></div>                     <div class="row mb-3">                            <label for="usuario" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameusuario")</label><div class="col-md-6"><input id="usuario" type="text"  value="{{$registro->usuario}}" class="form-control" name="usuario" required></div></div>                     <div class="row mb-3">                            <label for="medico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico")</label><div class="col-md-6"><input id="medico" type="text"  value="{{$registro->medico}}" class="form-control" name="medico" required></div></div>                     <div class="row mb-3">                            <label for="proveedor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameproveedor")</label><div class="col-md-6"><input id="proveedor" type="text"  value="{{$registro->proveedor}}" class="form-control" name="proveedor" required></div></div>                     <div class="row mb-3">                            <label for="numero" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumero")</label><div class="col-md-6"><input id="numero" type="text"  value="{{$registro->numero}}" class="form-control" name="numero" required></div></div>                     <div class="row mb-3">                            <label for="mensaje" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemensaje")</label><div class="col-md-6"><input id="mensaje" type="text"  value="{{$registro->mensaje}}" class="form-control" name="mensaje" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  value="{{$registro->fecha}}" class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="tipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo")</label><div class="col-md-6"><input id="tipo" type="text"  value="{{$registro->tipo}}" class="form-control" name="tipo" required></div></div>                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  value="{{$registro->historia}}" class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  value="{{$registro->consulta}}" class="form-control" name="consulta" required></div></div>
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


