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
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text"  value="{{$registro->nrohistoria}}" class="form-control" name="nrohistoria" required></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text"  value="{{$registro->nroconsulta}}" class="form-control" name="nroconsulta" required></div></div>                     <div class="row mb-3">                            <label for="codeexamen" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodeexamen")</label><div class="col-md-6"><input id="codeexamen" type="text"  value="{{$registro->codeexamen}}" class="form-control" name="codeexamen" required></div></div>                     <div class="row mb-3">                            <label for="orden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameorden")</label><div class="col-md-6"><input id="orden" type="text"  value="{{$registro->orden}}" class="form-control" name="orden" required></div></div>                     <div class="row mb-3">                            <label for="cedula" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula")</label><div class="col-md-6"><input id="cedula" type="text"  value="{{$registro->cedula}}" class="form-control" name="cedula" required></div></div>                     <div class="row mb-3">                            <label for="nombre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre")</label><div class="col-md-6"><input id="nombre" type="text"  value="{{$registro->nombre}}" class="form-control" name="nombre" required></div></div>                     <div class="row mb-3">                            <label for="procedencia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprocedencia")</label><div class="col-md-6"><input id="procedencia" type="text"  value="{{$registro->procedencia}}" class="form-control" name="procedencia" required></div></div>
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


