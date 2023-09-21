@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerTipo_antecedente')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="codetipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodetipo")</label><div class="col-md-6"><input id="codetipo" type="text" value="{{$registro->codetipo}}" class="form-control" name="codetipo" readonly></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text" value="{{$registro->descripcion}}" class="form-control" name="descripcion" readonly></div></div>                     <div class="row mb-3">                            <label for="tipoantecedente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipoantecedente")</label><div class="col-md-6"><input id="tipoantecedente" type="text" value="{{$registro->tipoantecedente}}" class="form-control" name="tipoantecedente" readonly></div></div>
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
