@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerRecipe2')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text" value="{{$registro->nrohistoria}}" class="form-control" name="nrohistoria" readonly></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text" value="{{$registro->nroconsulta}}" class="form-control" name="nroconsulta" readonly></div></div>                     <div class="row mb-3">                            <label for="codemedicina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodemedicina")</label><div class="col-md-6"><input id="codemedicina" type="text" value="{{$registro->codemedicina}}" class="form-control" name="codemedicina" readonly></div></div>                     <div class="row mb-3">                            <label for="indicaciones" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameindicaciones")</label><div class="col-md-6"><input id="indicaciones" type="text" value="{{$registro->indicaciones}}" class="form-control" name="indicaciones" readonly></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text" value="{{$registro->cantidad}}" class="form-control" name="cantidad" readonly></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text" value="{{$registro->descripcion}}" class="form-control" name="descripcion" readonly></div></div>                     <div class="row mb-3">                            <label for="orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorden")</label><div class="col-md-6"><input id="orden" type="text" value="{{$registro->orden}}" class="form-control" name="orden" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text" value="{{$registro->fecha}}" class="form-control" name="fecha" readonly></div></div>                     <div class="row mb-3">                            <label for="recipe" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerecipe")</label><div class="col-md-6"><input id="recipe" type="text" value="{{$registro->recipe}}" class="form-control" name="recipe" readonly></div></div>                     <div class="row mb-3">                            <label for="comple" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecomple")</label><div class="col-md-6"><input id="comple" type="text" value="{{$registro->comple}}" class="form-control" name="comple" readonly></div></div>
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
