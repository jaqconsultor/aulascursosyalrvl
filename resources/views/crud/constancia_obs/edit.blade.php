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
                     <div class="row mb-3">                            <label for="numhistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumhistoria")</label><div class="col-md-6"><input id="numhistoria" type="text"  value="{{$registro->numhistoria}}" class="form-control" name="numhistoria" required></div></div>                     <div class="row mb-3">                            <label for="numconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumconsulta")</label><div class="col-md-6"><input id="numconsulta" type="text"  value="{{$registro->numconsulta}}" class="form-control" name="numconsulta" required></div></div>                     <div class="row mb-3">                            <label for="observacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameobservacion")</label><div class="col-md-6"><input id="observacion" type="text"  value="{{$registro->observacion}}" class="form-control" name="observacion" required></div></div>                     <div class="row mb-3">                            <label for="titulo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametitulo")</label><div class="col-md-6"><input id="titulo" type="text"  value="{{$registro->titulo}}" class="form-control" name="titulo" required></div></div>                     <div class="row mb-3">                            <label for="observacion01" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameobservacion01")</label><div class="col-md-6"><input id="observacion01" type="text"  value="{{$registro->observacion01}}" class="form-control" name="observacion01" required></div></div>
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


