@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerDieta_paciente')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="histroria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistroria")</label><div class="col-md-6"><input id="histroria" type="text" value="{{$registro->histroria}}" class="form-control" name="histroria" readonly></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text" value="{{$registro->consulta}}" class="form-control" name="consulta" readonly></div></div>                     <div class="row mb-3">                            <label for="cod_dieta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_dieta")</label><div class="col-md-6"><input id="cod_dieta" type="text" value="{{$registro->cod_dieta}}" class="form-control" name="cod_dieta" readonly></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text" value="{{$registro->descripcion}}" class="form-control" name="descripcion" readonly></div></div>                     <div class="row mb-3">                            <label for="ejecutada" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameejecutada")</label><div class="col-md-6"><input id="ejecutada" type="text" value="{{$registro->ejecutada}}" class="form-control" name="ejecutada" readonly></div></div>                     <div class="row mb-3">                            <label for="calorias" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecalorias")</label><div class="col-md-6"><input id="calorias" type="text" value="{{$registro->calorias}}" class="form-control" name="calorias" readonly></div></div>                     <div class="row mb-3">                            <label for="dieta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedieta")</label><div class="col-md-6"><input id="dieta" type="text" value="{{$registro->dieta}}" class="form-control" name="dieta" readonly></div></div>
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
