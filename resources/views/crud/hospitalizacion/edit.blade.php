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
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text"  value="{{$registro->nrohistoria}}" class="form-control" name="nrohistoria" required></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text"  value="{{$registro->nroconsulta}}" class="form-control" name="nroconsulta" required></div></div>                     <div class="row mb-3">                            <label for="diagprev" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namediagprev")</label><div class="col-md-6"><input id="diagprev" type="text"  value="{{$registro->diagprev}}" class="form-control" name="diagprev" required></div></div>                     <div class="row mb-3">                            <label for="indiprev" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameindiprev")</label><div class="col-md-6"><input id="indiprev" type="text"  value="{{$registro->indiprev}}" class="form-control" name="indiprev" required></div></div>                     <div class="row mb-3">                            <label for="dieta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedieta")</label><div class="col-md-6"><input id="dieta" type="text"  value="{{$registro->dieta}}" class="form-control" name="dieta" required></div></div>                     <div class="row mb-3">                            <label for="habitacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehabitacion")</label><div class="col-md-6"><input id="habitacion" type="text"  value="{{$registro->habitacion}}" class="form-control" name="habitacion" required></div></div>                     <div class="row mb-3">                            <label for="hospital" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehospital")</label><div class="col-md-6"><input id="hospital" type="text"  value="{{$registro->hospital}}" class="form-control" name="hospital" required></div></div>
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


