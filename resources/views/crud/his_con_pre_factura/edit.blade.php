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
                     <div class="row mb-3">                            <label for="id_registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameid_registro")</label><div class="col-md-6"><input id="id_registro" type="text"  value="{{$registro->id_registro}}" class="form-control" name="id_registro" required></div></div>                     <div class="row mb-3">                            <label for="numhistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumhistoria")</label><div class="col-md-6"><input id="numhistoria" type="text"  value="{{$registro->numhistoria}}" class="form-control" name="numhistoria" required></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text"  value="{{$registro->nroconsulta}}" class="form-control" name="nroconsulta" required></div></div>                     <div class="row mb-3">                            <label for="codigo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodigo")</label><div class="col-md-6"><input id="codigo" type="text"  value="{{$registro->codigo}}" class="form-control" name="codigo" required></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text"  value="{{$registro->descripcion}}" class="form-control" name="descripcion" required></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text"  value="{{$registro->cantidad}}" class="form-control" name="cantidad" required></div></div>                     <div class="row mb-3">                            <label for="monto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto")</label><div class="col-md-6"><input id="monto" type="text"  value="{{$registro->monto}}" class="form-control" name="monto" required></div></div>
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


