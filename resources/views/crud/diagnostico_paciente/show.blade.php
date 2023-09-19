@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerDiagnostico_paciente')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text" value="{{$registro->nrohistoria}}" class="form-control" name="nrohistoria" readonly></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text" value="{{$registro->nroconsulta}}" class="form-control" name="nroconsulta" readonly></div></div>                     <div class="row mb-3">                            <label for="codediagnostico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodediagnostico")</label><div class="col-md-6"><input id="codediagnostico" type="text" value="{{$registro->codediagnostico}}" class="form-control" name="codediagnostico" readonly></div></div>                     <div class="row mb-3">                            <label for="detalle_diagnostco" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedetalle_diagnostco")</label><div class="col-md-6"><input id="detalle_diagnostco" type="text" value="{{$registro->detalle_diagnostco}}" class="form-control" name="detalle_diagnostco" readonly></div></div>                     <div class="row mb-3">                            <label for="orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorden")</label><div class="col-md-6"><input id="orden" type="text" value="{{$registro->orden}}" class="form-control" name="orden" readonly></div></div>
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
