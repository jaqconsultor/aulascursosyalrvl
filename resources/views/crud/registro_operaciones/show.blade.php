@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerRegistro_operaciones')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameregistro")</label><div class="col-md-6"><input id="registro" type="text" value="{{$registro->registro}}" class="form-control" name="registro" readonly></div></div>                     <div class="row mb-3">                            <label for="dia_registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedia_registro")</label><div class="col-md-6"><input id="dia_registro" type="text" value="{{$registro->dia_registro}}" class="form-control" name="dia_registro" readonly></div></div>                     <div class="row mb-3">                            <label for="hora_registro" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehora_registro")</label><div class="col-md-6"><input id="hora_registro" type="text" value="{{$registro->hora_registro}}" class="form-control" name="hora_registro" readonly></div></div>                     <div class="row mb-3">                            <label for="operador" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameoperador")</label><div class="col-md-6"><input id="operador" type="text" value="{{$registro->operador}}" class="form-control" name="operador" readonly></div></div>                     <div class="row mb-3">                            <label for="status" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestatus")</label><div class="col-md-6"><input id="status" type="text" value="{{$registro->status}}" class="form-control" name="status" readonly></div></div>                     <div class="row mb-3">                            <label for="operacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameoperacion")</label><div class="col-md-6"><input id="operacion" type="text" value="{{$registro->operacion}}" class="form-control" name="operacion" readonly></div></div>                     <div class="row mb-3">                            <label for="descricion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescricion")</label><div class="col-md-6"><input id="descricion" type="text" value="{{$registro->descricion}}" class="form-control" name="descricion" readonly></div></div>                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text" value="{{$registro->historia}}" class="form-control" name="historia" readonly></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text" value="{{$registro->consulta}}" class="form-control" name="consulta" readonly></div></div>                     <div class="row mb-3">                            <label for="medico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico")</label><div class="col-md-6"><input id="medico" type="text" value="{{$registro->medico}}" class="form-control" name="medico" readonly></div></div>                     <div class="row mb-3">                            <label for="paciente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepaciente")</label><div class="col-md-6"><input id="paciente" type="text" value="{{$registro->paciente}}" class="form-control" name="paciente" readonly></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span>
</a>
</div>
</div>
</p>
</div>
<div class="card-footer">
</div>
</div>
</div>
</div>
@endforeach
@endsection
