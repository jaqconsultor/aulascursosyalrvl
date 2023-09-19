@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearDepartment')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="dept_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedept_id")</label><div class="col-md-6"><input id="dept_id" type="text"  class="form-control" name="dept_id" required></div></div>                     <div class="row mb-3">                            <label for="dept_name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedept_name")</label><div class="col-md-6"><input id="dept_name" type="text"  class="form-control" name="dept_name" required></div></div>                     <div class="row mb-3">                            <label for="dept_head_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedept_head_id")</label><div class="col-md-6"><input id="dept_head_id" type="text"  class="form-control" name="dept_head_id" required></div></div>
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
