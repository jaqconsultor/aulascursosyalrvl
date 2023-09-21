@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerTipos_documentos')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="tip_documento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametip_documento")</label><div class="col-md-6"><input id="tip_documento" type="text" value="{{$registro->tip_documento}}" class="form-control" name="tip_documento" readonly></div></div>                     <div class="row mb-3">                            <label for="des_documento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedes_documento")</label><div class="col-md-6"><input id="des_documento" type="text" value="{{$registro->des_documento}}" class="form-control" name="des_documento" readonly></div></div>
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
