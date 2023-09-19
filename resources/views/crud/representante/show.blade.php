@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerRepresentante')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="numhistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumhistoria")</label><div class="col-md-6"><input id="numhistoria" type="text" value="{{$registro->numhistoria}}" class="form-control" name="numhistoria" readonly></div></div>                     <div class="row mb-3">                            <label for="nombre" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre")</label><div class="col-md-6"><input id="nombre" type="text" value="{{$registro->nombre}}" class="form-control" name="nombre" readonly></div></div>                     <div class="row mb-3">                            <label for="codeparentesco" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodeparentesco")</label><div class="col-md-6"><input id="codeparentesco" type="text" value="{{$registro->codeparentesco}}" class="form-control" name="codeparentesco" readonly></div></div>                     <div class="row mb-3">                            <label for="direccion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedireccion")</label><div class="col-md-6"><input id="direccion" type="text" value="{{$registro->direccion}}" class="form-control" name="direccion" readonly></div></div>
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
