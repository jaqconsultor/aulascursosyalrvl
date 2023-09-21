@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearDoctores')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="cedula" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula")</label><div class="col-md-6"><input id="cedula" type="text"  class="form-control" name="cedula" required></div></div>                     <div class="row mb-3">                            <label for="apellidos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameapellidos")</label><div class="col-md-6"><input id="apellidos" type="text"  class="form-control" name="apellidos" required></div></div>                     <div class="row mb-3">                            <label for="nombres" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombres")</label><div class="col-md-6"><input id="nombres" type="text"  class="form-control" name="nombres" required></div></div>                     <div class="row mb-3">                            <label for="clinica" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameclinica")</label><div class="col-md-6"><input id="clinica" type="text"  class="form-control" name="clinica" required></div></div>                     <div class="row mb-3">                            <label for="direccion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedireccion")</label><div class="col-md-6"><input id="direccion" type="text"  class="form-control" name="direccion" required></div></div>                     <div class="row mb-3">                            <label for="telefono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono")</label><div class="col-md-6"><input id="telefono" type="text"  class="form-control" name="telefono" required></div></div>                     <div class="row mb-3">                            <label for="ciudad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameciudad")</label><div class="col-md-6"><input id="ciudad" type="text"  class="form-control" name="ciudad" required></div></div>                     <div class="row mb-3">                            <label for="nota" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenota")</label><div class="col-md-6"><input id="nota" type="text"  class="form-control" name="nota" required></div></div>                     <div class="row mb-3">                            <label for="codeespecial" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodeespecial")</label><div class="col-md-6"><input id="codeespecial" type="text"  class="form-control" name="codeespecial" required></div></div>
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
