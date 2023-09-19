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
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text"  value="{{$registro->nrohistoria}}" class="form-control" name="nrohistoria" required></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text"  value="{{$registro->nroconsulta}}" class="form-control" name="nroconsulta" required></div></div>                     <div class="row mb-3">                            <label for="codereposo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodereposo")</label><div class="col-md-6"><input id="codereposo" type="text"  value="{{$registro->codereposo}}" class="form-control" name="codereposo" required></div></div>                     <div class="row mb-3">                            <label for="fdesde" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefdesde")</label><div class="col-md-6"><input id="fdesde" type="text"  value="{{$registro->fdesde}}" class="form-control" name="fdesde" required></div></div>                     <div class="row mb-3">                            <label for="numdias" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumdias")</label><div class="col-md-6"><input id="numdias" type="text"  value="{{$registro->numdias}}" class="form-control" name="numdias" required></div></div>                     <div class="row mb-3">                            <label for="obser_reposo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameobser_reposo")</label><div class="col-md-6"><input id="obser_reposo" type="text"  value="{{$registro->obser_reposo}}" class="form-control" name="obser_reposo" required></div></div>
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


