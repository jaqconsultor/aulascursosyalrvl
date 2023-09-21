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
                     <div class="row mb-3">                            <label for="codigo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodigo")</label><div class="col-md-6"><input id="codigo" type="text"  value="{{$registro->codigo}}" class="form-control" name="codigo" required></div></div>                     <div class="row mb-3">                            <label for="codemedicina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodemedicina")</label><div class="col-md-6"><input id="codemedicina" type="text"  value="{{$registro->codemedicina}}" class="form-control" name="codemedicina" required></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text"  value="{{$registro->descripcion}}" class="form-control" name="descripcion" required></div></div>                     <div class="row mb-3">                            <label for="indicaciones" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameindicaciones")</label><div class="col-md-6"><input id="indicaciones" type="text"  value="{{$registro->indicaciones}}" class="form-control" name="indicaciones" required></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text"  value="{{$registro->cantidad}}" class="form-control" name="cantidad" required></div></div>                     <div class="row mb-3">                            <label for="orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorden")</label><div class="col-md-6"><input id="orden" type="text"  value="{{$registro->orden}}" class="form-control" name="orden" required></div></div>
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


