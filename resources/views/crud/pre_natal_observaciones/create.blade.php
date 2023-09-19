@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearPre_natal_observaciones')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="fur" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefur")</label><div class="col-md-6"><input id="fur" type="text"  class="form-control" name="fur" required></div></div>                     <div class="row mb-3">                            <label for="menarquia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemenarquia")</label><div class="col-md-6"><input id="menarquia" type="text"  class="form-control" name="menarquia" required></div></div>                     <div class="row mb-3">                            <label for="gestas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namegestas")</label><div class="col-md-6"><input id="gestas" type="text"  class="form-control" name="gestas" required></div></div>                     <div class="row mb-3">                            <label for="parto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameparto")</label><div class="col-md-6"><input id="parto" type="text"  class="form-control" name="parto" required></div></div>                     <div class="row mb-3">                            <label for="tipiaje" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipiaje")</label><div class="col-md-6"><input id="tipiaje" type="text"  class="form-control" name="tipiaje" required></div></div>                     <div class="row mb-3">                            <label for="observaciones" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameobservaciones")</label><div class="col-md-6"><input id="observaciones" type="text"  class="form-control" name="observaciones" required></div></div>                     <div class="row mb-3">                            <label for="tipiaje_cony" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipiaje_cony")</label><div class="col-md-6"><input id="tipiaje_cony" type="text"  class="form-control" name="tipiaje_cony" required></div></div>                     <div class="row mb-3">                            <label for="gesta_clave" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namegesta_clave")</label><div class="col-md-6"><input id="gesta_clave" type="text"  class="form-control" name="gesta_clave" required></div></div>                     <div class="row mb-3">                            <label for="partos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepartos")</label><div class="col-md-6"><input id="partos" type="text"  class="form-control" name="partos" required></div></div>                     <div class="row mb-3">                            <label for="cesarea" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecesarea")</label><div class="col-md-6"><input id="cesarea" type="text"  class="form-control" name="cesarea" required></div></div>                     <div class="row mb-3">                            <label for="abortos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameabortos")</label><div class="col-md-6"><input id="abortos" type="text"  class="form-control" name="abortos" required></div></div>                     <div class="row mb-3">                            <label for="otros" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameotros")</label><div class="col-md-6"><input id="otros" type="text"  class="form-control" name="otros" required></div></div>                     <div class="row mb-3">                            <label for="final" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefinal")</label><div class="col-md-6"><input id="final" type="text"  class="form-control" name="final" required></div></div>                     <div class="row mb-3">                            <label for="multiple" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemultiple")</label><div class="col-md-6"><input id="multiple" type="text"  class="form-control" name="multiple" required></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text"  class="form-control" name="cantidad" required></div></div>
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
