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
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text"  value="{{$registro->nrohistoria}}" class="form-control" name="nrohistoria" required></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text"  value="{{$registro->nroconsulta}}" class="form-control" name="nroconsulta" required></div></div>                     <div class="row mb-3">                            <label for="numero_cel" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumero_cel")</label><div class="col-md-6"><input id="numero_cel" type="text"  value="{{$registro->numero_cel}}" class="form-control" name="numero_cel" required></div></div>                     <div class="row mb-3">                            <label for="texto_sms" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametexto_sms")</label><div class="col-md-6"><input id="texto_sms" type="text"  value="{{$registro->texto_sms}}" class="form-control" name="texto_sms" required></div></div>                     <div class="row mb-3">                            <label for="orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorden")</label><div class="col-md-6"><input id="orden" type="text"  value="{{$registro->orden}}" class="form-control" name="orden" required></div></div>
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


