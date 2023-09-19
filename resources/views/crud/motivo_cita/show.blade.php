@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerMotivo_cita')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="codigo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodigo")</label><div class="col-md-6"><input id="codigo" type="text" value="{{$registro->codigo}}" class="form-control" name="codigo" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo_atencion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo_atencion")</label><div class="col-md-6"><input id="tipo_atencion" type="text" value="{{$registro->tipo_atencion}}" class="form-control" name="tipo_atencion" readonly></div></div>
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
