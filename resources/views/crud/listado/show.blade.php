@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerListado')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="tipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipo")</label><div class="col-md-6"><input id="tipo" type="text" value="{{$registro->tipo}}" class="form-control" name="tipo" readonly></div></div>                     <div class="row mb-3">                            <label for="descripcion_tipo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedescripcion_tipo")</label><div class="col-md-6"><input id="descripcion_tipo" type="text" value="{{$registro->descripcion_tipo}}" class="form-control" name="descripcion_tipo" readonly></div></div>                     <div class="row mb-3">                            <label for="segundo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesegundo")</label><div class="col-md-6"><input id="segundo" type="text" value="{{$registro->segundo}}" class="form-control" name="segundo" readonly></div></div>
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
