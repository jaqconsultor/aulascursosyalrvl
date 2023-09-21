@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearSeg_emp')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="codesegemp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodesegemp")</label><div class="col-md-6"><input id="codesegemp" type="text"  class="form-control" name="codesegemp" required></div></div>                     <div class="row mb-3">                            <label for="nombre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre")</label><div class="col-md-6"><input id="nombre" type="text"  class="form-control" name="nombre" required></div></div>                     <div class="row mb-3">                            <label for="rif" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerif")</label><div class="col-md-6"><input id="rif" type="text"  class="form-control" name="rif" required></div></div>                     <div class="row mb-3">                            <label for="direccion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedireccion")</label><div class="col-md-6"><input id="direccion" type="text"  class="form-control" name="direccion" required></div></div>                     <div class="row mb-3">                            <label for="telef" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelef")</label><div class="col-md-6"><input id="telef" type="text"  class="form-control" name="telef" required></div></div>
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
