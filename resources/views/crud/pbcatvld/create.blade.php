@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearPbcatvld')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="pbv_name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbv_name")</label><div class="col-md-6"><input id="pbv_name" type="text"  class="form-control" name="pbv_name" required></div></div>                     <div class="row mb-3">                            <label for="pbv_vald" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbv_vald")</label><div class="col-md-6"><input id="pbv_vald" type="text"  class="form-control" name="pbv_vald" required></div></div>                     <div class="row mb-3">                            <label for="pbv_type" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbv_type")</label><div class="col-md-6"><input id="pbv_type" type="text"  class="form-control" name="pbv_type" required></div></div>                     <div class="row mb-3">                            <label for="pbv_cntr" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbv_cntr")</label><div class="col-md-6"><input id="pbv_cntr" type="text"  class="form-control" name="pbv_cntr" required></div></div>                     <div class="row mb-3">                            <label for="pbv_msg" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbv_msg")</label><div class="col-md-6"><input id="pbv_msg" type="text"  class="form-control" name="pbv_msg" required></div></div>
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
