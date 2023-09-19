@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerBancos')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="cod_banco" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecod_banco")</label><div class="col-md-6"><input id="cod_banco" type="text" value="{{$registro->cod_banco}}" class="form-control" name="cod_banco" readonly></div></div>                     <div class="row mb-3">                            <label for="nombre_banco" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre_banco")</label><div class="col-md-6"><input id="nombre_banco" type="text" value="{{$registro->nombre_banco}}" class="form-control" name="nombre_banco" readonly></div></div>
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
