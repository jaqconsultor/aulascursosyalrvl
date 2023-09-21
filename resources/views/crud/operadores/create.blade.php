@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearOperadores')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="primera" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprimera")</label><div class="col-md-6"><input id="primera" type="text"  class="form-control" name="primera" required></div></div>                     <div class="row mb-3">                            <label for="segunda" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesegunda")</label><div class="col-md-6"><input id="segunda" type="text"  class="form-control" name="segunda" required></div></div>                     <div class="row mb-3">                            <label for="nonbre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenonbre")</label><div class="col-md-6"><input id="nonbre" type="text"  class="form-control" name="nonbre" required></div></div>                     <div class="row mb-3">                            <label for="nivel" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenivel")</label><div class="col-md-6"><input id="nivel" type="text"  class="form-control" name="nivel" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">@lang('dicc.VerLista')</span>
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
@endsection
