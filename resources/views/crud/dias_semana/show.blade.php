@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerDias_semana')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text" value="{{$registro->fecha}}" class="form-control" name="fecha" readonly></div></div>                     <div class="row mb-3">                            <label for="dia_semana" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedia_semana")</label><div class="col-md-6"><input id="dia_semana" type="text" value="{{$registro->dia_semana}}" class="form-control" name="dia_semana" readonly></div></div>                     <div class="row mb-3">                            <label for="semana" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesemana")</label><div class="col-md-6"><input id="semana" type="text" value="{{$registro->semana}}" class="form-control" name="semana" readonly></div></div>                     <div class="row mb-3">                            <label for="ano" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameano")</label><div class="col-md-6"><input id="ano" type="text" value="{{$registro->ano}}" class="form-control" name="ano" readonly></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text" value="{{$registro->descripcion}}" class="form-control" name="descripcion" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo_dia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_dia")</label><div class="col-md-6"><input id="tipo_dia" type="text" value="{{$registro->tipo_dia}}" class="form-control" name="tipo_dia" readonly></div></div>
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
