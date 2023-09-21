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
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  value="{{$registro->historia}}" class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  value="{{$registro->consulta}}" class="form-control" name="consulta" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  value="{{$registro->fecha}}" class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="referido" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereferido")</label><div class="col-md-6"><input id="referido" type="text"  value="{{$registro->referido}}" class="form-control" name="referido" required></div></div>                     <div class="row mb-3">                            <label for="menarquia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemenarquia")</label><div class="col-md-6"><input id="menarquia" type="text"  value="{{$registro->menarquia}}" class="form-control" name="menarquia" required></div></div>                     <div class="row mb-3">                            <label for="para" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepara")</label><div class="col-md-6"><input id="para" type="text"  value="{{$registro->para}}" class="form-control" name="para" required></div></div>                     <div class="row mb-3">                            <label for="quirurgicos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namequirurgicos")</label><div class="col-md-6"><input id="quirurgicos" type="text"  value="{{$registro->quirurgicos}}" class="form-control" name="quirurgicos" required></div></div>                     <div class="row mb-3">                            <label for="hormonas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehormonas")</label><div class="col-md-6"><input id="hormonas" type="text"  value="{{$registro->hormonas}}" class="form-control" name="hormonas" required></div></div>                     <div class="row mb-3">                            <label for="tranductor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametranductor")</label><div class="col-md-6"><input id="tranductor" type="text"  value="{{$registro->tranductor}}" class="form-control" name="tranductor" required></div></div>                     <div class="row mb-3">                            <label for="mama_derecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemama_derecha")</label><div class="col-md-6"><input id="mama_derecha" type="text"  value="{{$registro->mama_derecha}}" class="form-control" name="mama_derecha" required></div></div>                     <div class="row mb-3">                            <label for="axila_derecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameaxila_derecha")</label><div class="col-md-6"><input id="axila_derecha" type="text"  value="{{$registro->axila_derecha}}" class="form-control" name="axila_derecha" required></div></div>                     <div class="row mb-3">                            <label for="mama_izquierda" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemama_izquierda")</label><div class="col-md-6"><input id="mama_izquierda" type="text"  value="{{$registro->mama_izquierda}}" class="form-control" name="mama_izquierda" required></div></div>                     <div class="row mb-3">                            <label for="axila_izquierda" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameaxila_izquierda")</label><div class="col-md-6"><input id="axila_izquierda" type="text"  value="{{$registro->axila_izquierda}}" class="form-control" name="axila_izquierda" required></div></div>                     <div class="row mb-3">                            <label for="conclusion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconclusion")</label><div class="col-md-6"><input id="conclusion" type="text"  value="{{$registro->conclusion}}" class="form-control" name="conclusion" required></div></div>                     <div class="row mb-3">                            <label for="puro_texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepuro_texto")</label><div class="col-md-6"><input id="puro_texto" type="text"  value="{{$registro->puro_texto}}" class="form-control" name="puro_texto" required></div></div>
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


