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
                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  value="{{$registro->fecha}}" class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="numhistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumhistoria")</label><div class="col-md-6"><input id="numhistoria" type="text"  value="{{$registro->numhistoria}}" class="form-control" name="numhistoria" required></div></div>                     <div class="row mb-3">                            <label for="numorden" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumorden")</label><div class="col-md-6"><input id="numorden" type="text"  value="{{$registro->numorden}}" class="form-control" name="numorden" required></div></div>                     <div class="row mb-3">                            <label for="atendido" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameatendido")</label><div class="col-md-6"><input id="atendido" type="text"  value="{{$registro->atendido}}" class="form-control" name="atendido" required></div></div>                     <div class="row mb-3">                            <label for="estado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameestado")</label><div class="col-md-6"><input id="estado" type="text"  value="{{$registro->estado}}" class="form-control" name="estado" required></div></div>                     <div class="row mb-3">                            <label for="turno" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameturno")</label><div class="col-md-6"><input id="turno" type="text"  value="{{$registro->turno}}" class="form-control" name="turno" required></div></div>                     <div class="row mb-3">                            <label for="motivo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemotivo")</label><div class="col-md-6"><input id="motivo" type="text"  value="{{$registro->motivo}}" class="form-control" name="motivo" required></div></div>                     <div class="row mb-3">                            <label for="monto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemonto")</label><div class="col-md-6"><input id="monto" type="text"  value="{{$registro->monto}}" class="form-control" name="monto" required></div></div>                     <div class="row mb-3">                            <label for="hora_ini" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora_ini")</label><div class="col-md-6"><input id="hora_ini" type="text"  value="{{$registro->hora_ini}}" class="form-control" name="hora_ini" required></div></div>                     <div class="row mb-3">                            <label for="hora_fin" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora_fin")</label><div class="col-md-6"><input id="hora_fin" type="text"  value="{{$registro->hora_fin}}" class="form-control" name="hora_fin" required></div></div>                     <div class="row mb-3">                            <label for="tiempo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametiempo")</label><div class="col-md-6"><input id="tiempo" type="text"  value="{{$registro->tiempo}}" class="form-control" name="tiempo" required></div></div>                     <div class="row mb-3">                            <label for="tipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo")</label><div class="col-md-6"><input id="tipo" type="text"  value="{{$registro->tipo}}" class="form-control" name="tipo" required></div></div>                     <div class="row mb-3">                            <label for="conse" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconse")</label><div class="col-md-6"><input id="conse" type="text"  value="{{$registro->conse}}" class="form-control" name="conse" required></div></div>                     <div class="row mb-3">                            <label for="medico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico")</label><div class="col-md-6"><input id="medico" type="text"  value="{{$registro->medico}}" class="form-control" name="medico" required></div></div>                     <div class="row mb-3">                            <label for="sms" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesms")</label><div class="col-md-6"><input id="sms" type="text"  value="{{$registro->sms}}" class="form-control" name="sms" required></div></div>                     <div class="row mb-3">                            <label for="sms_text" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesms_text")</label><div class="col-md-6"><input id="sms_text" type="text"  value="{{$registro->sms_text}}" class="form-control" name="sms_text" required></div></div>
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


