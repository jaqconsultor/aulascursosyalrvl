@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearPbcatfmt')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="pbf_name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbf_name")</label><div class="col-md-6"><input id="pbf_name" type="text"  class="form-control" name="pbf_name" required></div></div>                     <div class="row mb-3">                            <label for="pbf_frmt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbf_frmt")</label><div class="col-md-6"><input id="pbf_frmt" type="text"  class="form-control" name="pbf_frmt" required></div></div>                     <div class="row mb-3">                            <label for="pbf_type" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbf_type")</label><div class="col-md-6"><input id="pbf_type" type="text"  class="form-control" name="pbf_type" required></div></div>                     <div class="row mb-3">                            <label for="pbf_cntr" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbf_cntr")</label><div class="col-md-6"><input id="pbf_cntr" type="text"  class="form-control" name="pbf_cntr" required></div></div>
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
