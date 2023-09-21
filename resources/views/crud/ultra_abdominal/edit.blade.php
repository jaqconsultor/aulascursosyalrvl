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
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text"  value="{{$registro->historia}}" class="form-control" name="historia" required></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text"  value="{{$registro->consulta}}" class="form-control" name="consulta" required></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text"  value="{{$registro->fecha}}" class="form-control" name="fecha" required></div></div>                     <div class="row mb-3">                            <label for="transductor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametransductor")</label><div class="col-md-6"><input id="transductor" type="text"  value="{{$registro->transductor}}" class="form-control" name="transductor" required></div></div>                     <div class="row mb-3">                            <label for="referido" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereferido")</label><div class="col-md-6"><input id="referido" type="text"  value="{{$registro->referido}}" class="form-control" name="referido" required></div></div>                     <div class="row mb-3">                            <label for="vesicula_bilial" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namevesicula_bilial")</label><div class="col-md-6"><input id="vesicula_bilial" type="text"  value="{{$registro->vesicula_bilial}}" class="form-control" name="vesicula_bilial" required></div></div>                     <div class="row mb-3">                            <label for="higado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehigado")</label><div class="col-md-6"><input id="higado" type="text"  value="{{$registro->higado}}" class="form-control" name="higado" required></div></div>                     <div class="row mb-3">                            <label for="porta_coledoco" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameporta_coledoco")</label><div class="col-md-6"><input id="porta_coledoco" type="text"  value="{{$registro->porta_coledoco}}" class="form-control" name="porta_coledoco" required></div></div>                     <div class="row mb-3">                            <label for="pancreas" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepancreas")</label><div class="col-md-6"><input id="pancreas" type="text"  value="{{$registro->pancreas}}" class="form-control" name="pancreas" required></div></div>                     <div class="row mb-3">                            <label for="rinon_derecho" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerinon_derecho")</label><div class="col-md-6"><input id="rinon_derecho" type="text"  value="{{$registro->rinon_derecho}}" class="form-control" name="rinon_derecho" required></div></div>                     <div class="row mb-3">                            <label for="rinon_izquierdo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namerinon_izquierdo")</label><div class="col-md-6"><input id="rinon_izquierdo" type="text"  value="{{$registro->rinon_izquierdo}}" class="form-control" name="rinon_izquierdo" required></div></div>                     <div class="row mb-3">                            <label for="prostata" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprostata")</label><div class="col-md-6"><input id="prostata" type="text"  value="{{$registro->prostata}}" class="form-control" name="prostata" required></div></div>                     <div class="row mb-3">                            <label for="vejiga_urina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namevejiga_urina")</label><div class="col-md-6"><input id="vejiga_urina" type="text"  value="{{$registro->vejiga_urina}}" class="form-control" name="vejiga_urina" required></div></div>                     <div class="row mb-3">                            <label for="vol_res_v_p_m" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namevol_res_v_p_m")</label><div class="col-md-6"><input id="vol_res_v_p_m" type="text"  value="{{$registro->vol_res_v_p_m}}" class="form-control" name="vol_res_v_p_m" required></div></div>                     <div class="row mb-3">                            <label for="ascitis" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameascitis")</label><div class="col-md-6"><input id="ascitis" type="text"  value="{{$registro->ascitis}}" class="form-control" name="ascitis" required></div></div>                     <div class="row mb-3">                            <label for="retroperitoneo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameretroperitoneo")</label><div class="col-md-6"><input id="retroperitoneo" type="text"  value="{{$registro->retroperitoneo}}" class="form-control" name="retroperitoneo" required></div></div>                     <div class="row mb-3">                            <label for="vasos_sanguineos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namevasos_sanguineos")</label><div class="col-md-6"><input id="vasos_sanguineos" type="text"  value="{{$registro->vasos_sanguineos}}" class="form-control" name="vasos_sanguineos" required></div></div>                     <div class="row mb-3">                            <label for="otros" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameotros")</label><div class="col-md-6"><input id="otros" type="text"  value="{{$registro->otros}}" class="form-control" name="otros" required></div></div>                     <div class="row mb-3">                            <label for="conclusiones" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconclusiones")</label><div class="col-md-6"><input id="conclusiones" type="text"  value="{{$registro->conclusiones}}" class="form-control" name="conclusiones" required></div></div>                     <div class="row mb-3">                            <label for="puro_texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepuro_texto")</label><div class="col-md-6"><input id="puro_texto" type="text"  value="{{$registro->puro_texto}}" class="form-control" name="puro_texto" required></div></div>
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


