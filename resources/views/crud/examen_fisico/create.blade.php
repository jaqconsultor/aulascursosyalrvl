@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearExamen_fisico')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text"  class="form-control" name="nrohistoria" required></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text"  class="form-control" name="nroconsulta" required></div></div>                     <div class="row mb-3">                            <label for="cardiopulmonal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecardiopulmonal")</label><div class="col-md-6"><input id="cardiopulmonal" type="text"  class="form-control" name="cardiopulmonal" required></div></div>                     <div class="row mb-3">                            <label for="abdomen" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameabdomen")</label><div class="col-md-6"><input id="abdomen" type="text"  class="form-control" name="abdomen" required></div></div>                     <div class="row mb-3">                            <label for="extremidades" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameextremidades")</label><div class="col-md-6"><input id="extremidades" type="text"  class="form-control" name="extremidades" required></div></div>                     <div class="row mb-3">                            <label for="otros" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameotros")</label><div class="col-md-6"><input id="otros" type="text"  class="form-control" name="otros" required></div></div>                     <div class="row mb-3">                            <label for="electrocardiograma" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameelectrocardiograma")</label><div class="col-md-6"><input id="electrocardiograma" type="text"  class="form-control" name="electrocardiograma" required></div></div>                     <div class="row mb-3">                            <label for="rx_de_torax" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerx_de_torax")</label><div class="col-md-6"><input id="rx_de_torax" type="text"  class="form-control" name="rx_de_torax" required></div></div>                     <div class="row mb-3">                            <label for="laboratorio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelaboratorio")</label><div class="col-md-6"><input id="laboratorio" type="text"  class="form-control" name="laboratorio" required></div></div>                     <div class="row mb-3">                            <label for="riesgo_operatorio" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameriesgo_operatorio")</label><div class="col-md-6"><input id="riesgo_operatorio" type="text"  class="form-control" name="riesgo_operatorio" required></div></div>                     <div class="row mb-3">                            <label for="sugerencias" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesugerencias")</label><div class="col-md-6"><input id="sugerencias" type="text"  class="form-control" name="sugerencias" required></div></div>
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
