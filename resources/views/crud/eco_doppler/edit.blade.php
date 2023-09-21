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
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  value="{{$registro->historia}}" class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  value="{{$registro->consulta}}" class="form-control" name="consulta" required></div></div>                     <div class="row mb-3">                            <label for="arteria_uraina_menor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namearteria_uraina_menor")</label><div class="col-md-6"><input id="arteria_uraina_menor" type="text"  value="{{$registro->arteria_uraina_menor}}" class="form-control" name="arteria_uraina_menor" required></div></div>                     <div class="row mb-3">                            <label for="arteria_uraina_mayor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namearteria_uraina_mayor")</label><div class="col-md-6"><input id="arteria_uraina_mayor" type="text"  value="{{$registro->arteria_uraina_mayor}}" class="form-control" name="arteria_uraina_mayor" required></div></div>                     <div class="row mb-3">                            <label for="arteria_umbilical_menor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namearteria_umbilical_menor")</label><div class="col-md-6"><input id="arteria_umbilical_menor" type="text"  value="{{$registro->arteria_umbilical_menor}}" class="form-control" name="arteria_umbilical_menor" required></div></div>                     <div class="row mb-3">                            <label for="arteria_umbilical_mayor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namearteria_umbilical_mayor")</label><div class="col-md-6"><input id="arteria_umbilical_mayor" type="text"  value="{{$registro->arteria_umbilical_mayor}}" class="form-control" name="arteria_umbilical_mayor" required></div></div>                     <div class="row mb-3">                            <label for="arteria_cerebral_menor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namearteria_cerebral_menor")</label><div class="col-md-6"><input id="arteria_cerebral_menor" type="text"  value="{{$registro->arteria_cerebral_menor}}" class="form-control" name="arteria_cerebral_menor" required></div></div>                     <div class="row mb-3">                            <label for="arteria_cerebral_mayor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namearteria_cerebral_mayor")</label><div class="col-md-6"><input id="arteria_cerebral_mayor" type="text"  value="{{$registro->arteria_cerebral_mayor}}" class="form-control" name="arteria_cerebral_mayor" required></div></div>                     <div class="row mb-3">                            <label for="ductos_venosos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameductos_venosos")</label><div class="col-md-6"><input id="ductos_venosos" type="text"  value="{{$registro->ductos_venosos}}" class="form-control" name="ductos_venosos" required></div></div>                     <div class="row mb-3">                            <label for="ven_umbilical" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameven_umbilical")</label><div class="col-md-6"><input id="ven_umbilical" type="text"  value="{{$registro->ven_umbilical}}" class="form-control" name="ven_umbilical" required></div></div>                     <div class="row mb-3">                            <label for="relac_aorta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerelac_aorta")</label><div class="col-md-6"><input id="relac_aorta" type="text"  value="{{$registro->relac_aorta}}" class="form-control" name="relac_aorta" required></div></div>                     <div class="row mb-3">                            <label for="texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametexto")</label><div class="col-md-6"><input id="texto" type="text"  value="{{$registro->texto}}" class="form-control" name="texto" required></div></div>                     <div class="row mb-3">                            <label for="conclusion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconclusion")</label><div class="col-md-6"><input id="conclusion" type="text"  value="{{$registro->conclusion}}" class="form-control" name="conclusion" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  value="{{$registro->fecha}}" class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="arteria_uraina_menor_izq" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namearteria_uraina_menor_izq")</label><div class="col-md-6"><input id="arteria_uraina_menor_izq" type="text"  value="{{$registro->arteria_uraina_menor_izq}}" class="form-control" name="arteria_uraina_menor_izq" required></div></div>                     <div class="row mb-3">                            <label for="arteria_uraina_mayor_izq" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namearteria_uraina_mayor_izq")</label><div class="col-md-6"><input id="arteria_uraina_mayor_izq" type="text"  value="{{$registro->arteria_uraina_mayor_izq}}" class="form-control" name="arteria_uraina_mayor_izq" required></div></div>                     <div class="row mb-3">                            <label for="sugerencias" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesugerencias")</label><div class="col-md-6"><input id="sugerencias" type="text"  value="{{$registro->sugerencias}}" class="form-control" name="sugerencias" required></div></div>                     <div class="row mb-3">                            <label for="gesta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namegesta")</label><div class="col-md-6"><input id="gesta" type="text"  value="{{$registro->gesta}}" class="form-control" name="gesta" required></div></div>                     <div class="row mb-3">                            <label for="fur" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefur")</label><div class="col-md-6"><input id="fur" type="text"  value="{{$registro->fur}}" class="form-control" name="fur" required></div></div>                     <div class="row mb-3">                            <label for="relacion_ud" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerelacion_ud")</label><div class="col-md-6"><input id="relacion_ud" type="text"  value="{{$registro->relacion_ud}}" class="form-control" name="relacion_ud" required></div></div>                     <div class="row mb-3">                            <label for="relacion_ui" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerelacion_ui")</label><div class="col-md-6"><input id="relacion_ui" type="text"  value="{{$registro->relacion_ui}}" class="form-control" name="relacion_ui" required></div></div>                     <div class="row mb-3">                            <label for="relacion_u" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerelacion_u")</label><div class="col-md-6"><input id="relacion_u" type="text"  value="{{$registro->relacion_u}}" class="form-control" name="relacion_u" required></div></div>                     <div class="row mb-3">                            <label for="relacion_cm" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerelacion_cm")</label><div class="col-md-6"><input id="relacion_cm" type="text"  value="{{$registro->relacion_cm}}" class="form-control" name="relacion_cm" required></div></div>                     <div class="row mb-3">                            <label for="pico_ud" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepico_ud")</label><div class="col-md-6"><input id="pico_ud" type="text"  value="{{$registro->pico_ud}}" class="form-control" name="pico_ud" required></div></div>                     <div class="row mb-3">                            <label for="pico_ui" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepico_ui")</label><div class="col-md-6"><input id="pico_ui" type="text"  value="{{$registro->pico_ui}}" class="form-control" name="pico_ui" required></div></div>                     <div class="row mb-3">                            <label for="pico_u" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepico_u")</label><div class="col-md-6"><input id="pico_u" type="text"  value="{{$registro->pico_u}}" class="form-control" name="pico_u" required></div></div>                     <div class="row mb-3">                            <label for="pico_cm" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepico_cm")</label><div class="col-md-6"><input id="pico_cm" type="text"  value="{{$registro->pico_cm}}" class="form-control" name="pico_cm" required></div></div>                     <div class="row mb-3">                            <label for="para" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepara")</label><div class="col-md-6"><input id="para" type="text"  value="{{$registro->para}}" class="form-control" name="para" required></div></div>                     <div class="row mb-3">                            <label for="puro_texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepuro_texto")</label><div class="col-md-6"><input id="puro_texto" type="text"  value="{{$registro->puro_texto}}" class="form-control" name="puro_texto" required></div></div>
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


