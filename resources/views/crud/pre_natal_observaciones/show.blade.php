@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerPre_natal_observaciones')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text" value="{{$registro->historia}}" class="form-control" name="historia" readonly></div></div>                     <div class="row mb-3">                            <label for="fur" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefur")</label><div class="col-md-6"><input id="fur" type="text" value="{{$registro->fur}}" class="form-control" name="fur" readonly></div></div>                     <div class="row mb-3">                            <label for="menarquia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemenarquia")</label><div class="col-md-6"><input id="menarquia" type="text" value="{{$registro->menarquia}}" class="form-control" name="menarquia" readonly></div></div>                     <div class="row mb-3">                            <label for="gestas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namegestas")</label><div class="col-md-6"><input id="gestas" type="text" value="{{$registro->gestas}}" class="form-control" name="gestas" readonly></div></div>                     <div class="row mb-3">                            <label for="parto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameparto")</label><div class="col-md-6"><input id="parto" type="text" value="{{$registro->parto}}" class="form-control" name="parto" readonly></div></div>                     <div class="row mb-3">                            <label for="tipiaje" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipiaje")</label><div class="col-md-6"><input id="tipiaje" type="text" value="{{$registro->tipiaje}}" class="form-control" name="tipiaje" readonly></div></div>                     <div class="row mb-3">                            <label for="observaciones" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameobservaciones")</label><div class="col-md-6"><input id="observaciones" type="text" value="{{$registro->observaciones}}" class="form-control" name="observaciones" readonly></div></div>                     <div class="row mb-3">                            <label for="tipiaje_cony" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametipiaje_cony")</label><div class="col-md-6"><input id="tipiaje_cony" type="text" value="{{$registro->tipiaje_cony}}" class="form-control" name="tipiaje_cony" readonly></div></div>                     <div class="row mb-3">                            <label for="gesta_clave" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namegesta_clave")</label><div class="col-md-6"><input id="gesta_clave" type="text" value="{{$registro->gesta_clave}}" class="form-control" name="gesta_clave" readonly></div></div>                     <div class="row mb-3">                            <label for="partos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepartos")</label><div class="col-md-6"><input id="partos" type="text" value="{{$registro->partos}}" class="form-control" name="partos" readonly></div></div>                     <div class="row mb-3">                            <label for="cesarea" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecesarea")</label><div class="col-md-6"><input id="cesarea" type="text" value="{{$registro->cesarea}}" class="form-control" name="cesarea" readonly></div></div>                     <div class="row mb-3">                            <label for="abortos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameabortos")</label><div class="col-md-6"><input id="abortos" type="text" value="{{$registro->abortos}}" class="form-control" name="abortos" readonly></div></div>                     <div class="row mb-3">                            <label for="otros" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameotros")</label><div class="col-md-6"><input id="otros" type="text" value="{{$registro->otros}}" class="form-control" name="otros" readonly></div></div>                     <div class="row mb-3">                            <label for="final" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefinal")</label><div class="col-md-6"><input id="final" type="text" value="{{$registro->final}}" class="form-control" name="final" readonly></div></div>                     <div class="row mb-3">                            <label for="multiple" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemultiple")</label><div class="col-md-6"><input id="multiple" type="text" value="{{$registro->multiple}}" class="form-control" name="multiple" readonly></div></div>                     <div class="row mb-3">                            <label for="cantidad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecantidad")</label><div class="col-md-6"><input id="cantidad" type="text" value="{{$registro->cantidad}}" class="form-control" name="cantidad" readonly></div></div>
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
