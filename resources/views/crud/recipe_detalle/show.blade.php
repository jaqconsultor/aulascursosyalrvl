@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerRecipe_detalle')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nrohistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenrohistoria")</label><div class="col-md-6"><input id="nrohistoria" type="text" value="{{$registro->nrohistoria}}" class="form-control" name="nrohistoria" readonly></div></div>                     <div class="row mb-3">                            <label for="nroconsulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenroconsulta")</label><div class="col-md-6"><input id="nroconsulta" type="text" value="{{$registro->nroconsulta}}" class="form-control" name="nroconsulta" readonly></div></div>                     <div class="row mb-3">                            <label for="recipe" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerecipe")</label><div class="col-md-6"><input id="recipe" type="text" value="{{$registro->recipe}}" class="form-control" name="recipe" readonly></div></div>                     <div class="row mb-3">                            <label for="fe_emision" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefe_emision")</label><div class="col-md-6"><input id="fe_emision" type="text" value="{{$registro->fe_emision}}" class="form-control" name="fe_emision" readonly></div></div>                     <div class="row mb-3">                            <label for="fe_vence" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefe_vence")</label><div class="col-md-6"><input id="fe_vence" type="text" value="{{$registro->fe_vence}}" class="form-control" name="fe_vence" readonly></div></div>                     <div class="row mb-3">                            <label for="nota" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenota")</label><div class="col-md-6"><input id="nota" type="text" value="{{$registro->nota}}" class="form-control" name="nota" readonly></div></div>
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
