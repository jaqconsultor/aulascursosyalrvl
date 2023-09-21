@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerTexto_doppler')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="nivel" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenivel")</label><div class="col-md-6"><input id="nivel" type="text" value="{{$registro->nivel}}" class="form-control" name="nivel" readonly></div></div>                     <div class="row mb-3">                            <label for="texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametexto")</label><div class="col-md-6"><input id="texto" type="text" value="{{$registro->texto}}" class="form-control" name="texto" readonly></div></div>
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
