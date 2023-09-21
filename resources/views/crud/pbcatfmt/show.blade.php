@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPbcatfmt')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="pbf_name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbf_name")</label><div class="col-md-6"><input id="pbf_name" type="text" value="{{$registro->pbf_name}}" class="form-control" name="pbf_name" readonly></div></div>                     <div class="row mb-3">                            <label for="pbf_frmt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbf_frmt")</label><div class="col-md-6"><input id="pbf_frmt" type="text" value="{{$registro->pbf_frmt}}" class="form-control" name="pbf_frmt" readonly></div></div>                     <div class="row mb-3">                            <label for="pbf_type" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbf_type")</label><div class="col-md-6"><input id="pbf_type" type="text" value="{{$registro->pbf_type}}" class="form-control" name="pbf_type" readonly></div></div>                     <div class="row mb-3">                            <label for="pbf_cntr" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbf_cntr")</label><div class="col-md-6"><input id="pbf_cntr" type="text" value="{{$registro->pbf_cntr}}" class="form-control" name="pbf_cntr" readonly></div></div>
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
