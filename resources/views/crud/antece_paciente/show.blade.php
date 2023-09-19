@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerAntece_paciente')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="numhistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumhistoria")</label><div class="col-md-6"><input id="numhistoria" type="text" value="{{$registro->numhistoria}}" class="form-control" name="numhistoria" readonly></div></div>                     <div class="row mb-3">                            <label for="codeantecedente" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodeantecedente")</label><div class="col-md-6"><input id="codeantecedente" type="text" value="{{$registro->codeantecedente}}" class="form-control" name="codeantecedente" readonly></div></div>                     <div class="row mb-3">                            <label for="detalles" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedetalles")</label><div class="col-md-6"><input id="detalles" type="text" value="{{$registro->detalles}}" class="form-control" name="detalles" readonly></div></div>                     <div class="row mb-3">                            <label for="descripcion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion")</label><div class="col-md-6"><input id="descripcion" type="text" value="{{$registro->descripcion}}" class="form-control" name="descripcion" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo")</label><div class="col-md-6"><input id="tipo" type="text" value="{{$registro->tipo}}" class="form-control" name="tipo" readonly></div></div>                     <div class="row mb-3">                            <label for="tipo2" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo2")</label><div class="col-md-6"><input id="tipo2" type="text" value="{{$registro->tipo2}}" class="form-control" name="tipo2" readonly></div></div>
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
