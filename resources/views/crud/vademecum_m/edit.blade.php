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
                     <div class="row mb-3">                            <label for="codemedicina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodemedicina")</label><div class="col-md-6"><input id="codemedicina" type="text"  value="{{$registro->codemedicina}}" class="form-control" name="codemedicina" required></div></div>                     <div class="row mb-3">                            <label for="nombregenerico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombregenerico")</label><div class="col-md-6"><input id="nombregenerico" type="text"  value="{{$registro->nombregenerico}}" class="form-control" name="nombregenerico" required></div></div>                     <div class="row mb-3">                            <label for="nombrecomercial" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombrecomercial")</label><div class="col-md-6"><input id="nombrecomercial" type="text"  value="{{$registro->nombrecomercial}}" class="form-control" name="nombrecomercial" required></div></div>                     <div class="row mb-3">                            <label for="dosificacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedosificacion")</label><div class="col-md-6"><input id="dosificacion" type="text"  value="{{$registro->dosificacion}}" class="form-control" name="dosificacion" required></div></div>                     <div class="row mb-3">                            <label for="uso" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameuso")</label><div class="col-md-6"><input id="uso" type="text"  value="{{$registro->uso}}" class="form-control" name="uso" required></div></div>                     <div class="row mb-3">                            <label for="presentacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepresentacion")</label><div class="col-md-6"><input id="presentacion" type="text"  value="{{$registro->presentacion}}" class="form-control" name="presentacion" required></div></div>                     <div class="row mb-3">                            <label for="concentracion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconcentracion")</label><div class="col-md-6"><input id="concentracion" type="text"  value="{{$registro->concentracion}}" class="form-control" name="concentracion" required></div></div>                     <div class="row mb-3">                            <label for="cada" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecada")</label><div class="col-md-6"><input id="cada" type="text"  value="{{$registro->cada}}" class="form-control" name="cada" required></div></div>                     <div class="row mb-3">                            <label for="durante" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedurante")</label><div class="col-md-6"><input id="durante" type="text"  value="{{$registro->durante}}" class="form-control" name="durante" required></div></div>                     <div class="row mb-3">                            <label for="pvc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepvc")</label><div class="col-md-6"><input id="pvc" type="text"  value="{{$registro->pvc}}" class="form-control" name="pvc" required></div></div>                     <div class="row mb-3">                            <label for="pvs" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepvs")</label><div class="col-md-6"><input id="pvs" type="text"  value="{{$registro->pvs}}" class="form-control" name="pvs" required></div></div>                     <div class="row mb-3">                            <label for="dosis" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedosis")</label><div class="col-md-6"><input id="dosis" type="text"  value="{{$registro->dosis}}" class="form-control" name="dosis" required></div></div>                     <div class="row mb-3">                            <label for="sico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesico")</label><div class="col-md-6"><input id="sico" type="text"  value="{{$registro->sico}}" class="form-control" name="sico" required></div></div>                     <div class="row mb-3">                            <label for="nombrecomercial1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombrecomercial1")</label><div class="col-md-6"><input id="nombrecomercial1" type="text"  value="{{$registro->nombrecomercial1}}" class="form-control" name="nombrecomercial1" required></div></div>                     <div class="row mb-3">                            <label for="nombrecomercial2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombrecomercial2")</label><div class="col-md-6"><input id="nombrecomercial2" type="text"  value="{{$registro->nombrecomercial2}}" class="form-control" name="nombrecomercial2" required></div></div>                     <div class="row mb-3">                            <label for="nombrecomercial3" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombrecomercial3")</label><div class="col-md-6"><input id="nombrecomercial3" type="text"  value="{{$registro->nombrecomercial3}}" class="form-control" name="nombrecomercial3" required></div></div>                     <div class="row mb-3">                            <label for="totalre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotalre")</label><div class="col-md-6"><input id="totalre" type="text"  value="{{$registro->totalre}}" class="form-control" name="totalre" required></div></div>                     <div class="row mb-3">                            <label for="sicome" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesicome")</label><div class="col-md-6"><input id="sicome" type="text"  value="{{$registro->sicome}}" class="form-control" name="sicome" required></div></div>                     <div class="row mb-3">                            <label for="sicome1" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesicome1")</label><div class="col-md-6"><input id="sicome1" type="text"  value="{{$registro->sicome1}}" class="form-control" name="sicome1" required></div></div>                     <div class="row mb-3">                            <label for="sicome2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesicome2")</label><div class="col-md-6"><input id="sicome2" type="text"  value="{{$registro->sicome2}}" class="form-control" name="sicome2" required></div></div>                     <div class="row mb-3">                            <label for="sicome3" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesicome3")</label><div class="col-md-6"><input id="sicome3" type="text"  value="{{$registro->sicome3}}" class="form-control" name="sicome3" required></div></div>
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


