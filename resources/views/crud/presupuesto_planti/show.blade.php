@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPresupuesto_planti')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="consecutivo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsecutivo")</label><div class="col-md-6"><input id="consecutivo" type="text" value="{{$registro->consecutivo}}" class="form-control" name="consecutivo" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo_precio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_precio")</label><div class="col-md-6"><input id="tipo_precio" type="text" value="{{$registro->tipo_precio}}" class="form-control" name="tipo_precio" readonly></div></div>                     <div class="row mb-3">                            <label for="total_costo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_costo")</label><div class="col-md-6"><input id="total_costo" type="text" value="{{$registro->total_costo}}" class="form-control" name="total_costo" readonly></div></div>                     <div class="row mb-3">                            <label for="total_final" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_final")</label><div class="col-md-6"><input id="total_final" type="text" value="{{$registro->total_final}}" class="form-control" name="total_final" readonly></div></div>                     <div class="row mb-3">                            <label for="notas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenotas")</label><div class="col-md-6"><input id="notas" type="text" value="{{$registro->notas}}" class="form-control" name="notas" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo_doc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_doc")</label><div class="col-md-6"><input id="tipo_doc" type="text" value="{{$registro->tipo_doc}}" class="form-control" name="tipo_doc" readonly></div></div>                     <div class="row mb-3">                            <label for="nom_presupuesto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenom_presupuesto")</label><div class="col-md-6"><input id="nom_presupuesto" type="text" value="{{$registro->nom_presupuesto}}" class="form-control" name="nom_presupuesto" readonly></div></div>
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
