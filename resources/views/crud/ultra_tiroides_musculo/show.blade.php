@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerUltra_tiroides_musculo')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="historia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namehistoria")</label><div class="col-md-6"><input id="historia" type="text" value="{{$registro->historia}}" class="form-control" name="historia" readonly></div></div>                     <div class="row mb-3">                            <label for="consulta" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconsulta")</label><div class="col-md-6"><input id="consulta" type="text" value="{{$registro->consulta}}" class="form-control" name="consulta" readonly></div></div>                     <div class="row mb-3">                            <label for="fecha" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefecha")</label><div class="col-md-6"><input id="fecha" type="text" value="{{$registro->fecha}}" class="form-control" name="fecha" readonly></div></div>                     <div class="row mb-3">                            <label for="transductor" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametransductor")</label><div class="col-md-6"><input id="transductor" type="text" value="{{$registro->transductor}}" class="form-control" name="transductor" readonly></div></div>                     <div class="row mb-3">                            <label for="referido" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namereferido")</label><div class="col-md-6"><input id="referido" type="text" value="{{$registro->referido}}" class="form-control" name="referido" readonly></div></div>                     <div class="row mb-3">                            <label for="texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametexto")</label><div class="col-md-6"><input id="texto" type="text" value="{{$registro->texto}}" class="form-control" name="texto" readonly></div></div>                     <div class="row mb-3">                            <label for="puro_texto" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepuro_texto")</label><div class="col-md-6"><input id="puro_texto" type="text" value="{{$registro->puro_texto}}" class="form-control" name="puro_texto" readonly></div></div>                     <div class="row mb-3">                            <label for="conclusiones" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameconclusiones")</label><div class="col-md-6"><input id="conclusiones" type="text" value="{{$registro->conclusiones}}" class="form-control" name="conclusiones" readonly></div></div>
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
