@extends('layouts.app')
@section('content')
@foreach ($registros as $registro) 
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.EditarRole')
</h5>
<div class="card-body">
<p class="card-text">
<form method="POST" action="{{ route('roles.update',$registro->id) }}">
@csrf
@method('PUT')
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  value="{{$registro->historia}}" class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  value="{{$registro->consulta}}" class="form-control" name="consulta" required></div></div>                     <div class="row mb-3">                            <label for="talla" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametalla")</label><div class="col-md-6"><input id="talla" type="text"  value="{{$registro->talla}}" class="form-control" name="talla" required></div></div>                     <div class="row mb-3">                            <label for="peso" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepeso")</label><div class="col-md-6"><input id="peso" type="text"  value="{{$registro->peso}}" class="form-control" name="peso" required></div></div>                     <div class="row mb-3">                            <label for="mamas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemamas")</label><div class="col-md-6"><input id="mamas" type="text"  value="{{$registro->mamas}}" class="form-control" name="mamas" required></div></div>                     <div class="row mb-3">                            <label for="tiroides" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametiroides")</label><div class="col-md-6"><input id="tiroides" type="text"  value="{{$registro->tiroides}}" class="form-control" name="tiroides" required></div></div>                     <div class="row mb-3">                            <label for="abdomen" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameabdomen")</label><div class="col-md-6"><input id="abdomen" type="text"  value="{{$registro->abdomen}}" class="form-control" name="abdomen" required></div></div>                     <div class="row mb-3">                            <label for="extremidades" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameextremidades")</label><div class="col-md-6"><input id="extremidades" type="text"  value="{{$registro->extremidades}}" class="form-control" name="extremidades" required></div></div>                     <div class="row mb-3">                            <label for="cardiopulmonar" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecardiopulmonar")</label><div class="col-md-6"><input id="cardiopulmonar" type="text"  value="{{$registro->cardiopulmonar}}" class="form-control" name="cardiopulmonar" required></div></div>                     <div class="row mb-3">                            <label for="genitales_externos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namegenitales_externos")</label><div class="col-md-6"><input id="genitales_externos" type="text"  value="{{$registro->genitales_externos}}" class="form-control" name="genitales_externos" required></div></div>                     <div class="row mb-3">                            <label for="especulos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameespeculos")</label><div class="col-md-6"><input id="especulos" type="text"  value="{{$registro->especulos}}" class="form-control" name="especulos" required></div></div>                     <div class="row mb-3">                            <label for="tacto_vaginal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametacto_vaginal")</label><div class="col-md-6"><input id="tacto_vaginal" type="text"  value="{{$registro->tacto_vaginal}}" class="form-control" name="tacto_vaginal" required></div></div>                     <div class="row mb-3">                            <label for="tacto_rectal" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametacto_rectal")</label><div class="col-md-6"><input id="tacto_rectal" type="text"  value="{{$registro->tacto_rectal}}" class="form-control" name="tacto_rectal" required></div></div>                     <div class="row mb-3">                            <label for="colposcopia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecolposcopia")</label><div class="col-md-6"><input id="colposcopia" type="text"  value="{{$registro->colposcopia}}" class="form-control" name="colposcopia" required></div></div>                     <div class="row mb-3">                            <label for="tension" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametension")</label><div class="col-md-6"><input id="tension" type="text"  value="{{$registro->tension}}" class="form-control" name="tension" required></div></div>                     <div class="row mb-3">                            <label for="general" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namegeneral")</label><div class="col-md-6"><input id="general" type="text"  value="{{$registro->general}}" class="form-control" name="general" required></div></div>                     <div class="row mb-3">                            <label for="neurologico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameneurologico")</label><div class="col-md-6"><input id="neurologico" type="text"  value="{{$registro->neurologico}}" class="form-control" name="neurologico" required></div></div>                     <div class="row mb-3">                            <label for="mama_derecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemama_derecha")</label><div class="col-md-6"><input id="mama_derecha" type="text"  value="{{$registro->mama_derecha}}" class="form-control" name="mama_derecha" required></div></div>                     <div class="row mb-3">                            <label for="total_g" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_g")</label><div class="col-md-6"><input id="total_g" type="text"  value="{{$registro->total_g}}" class="form-control" name="total_g" required></div></div>                     <div class="row mb-3">                            <label for="total_f" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_f")</label><div class="col-md-6"><input id="total_f" type="text"  value="{{$registro->total_f}}" class="form-control" name="total_f" required></div></div>                     <div class="row mb-3">                            <label for="total_general" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametotal_general")</label><div class="col-md-6"><input id="total_general" type="text"  value="{{$registro->total_general}}" class="form-control" name="total_general" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.UpdateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">
@lang('dicc.VerLista')
</span> 
</a>
</div>
</div>
</form>
</p>
</div>
<div class="card-footer">
</div>
</div>
</div>
</div>
@endforeach
@endsection


