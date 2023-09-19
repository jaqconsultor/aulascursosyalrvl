@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerReg_empl_frec_nomina')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="frecuencia_nomina" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefrecuencia_nomina")</label><div class="col-md-6"><input id="frecuencia_nomina" type="text" value="{{$registro->frecuencia_nomina}}" class="form-control" name="frecuencia_nomina" readonly></div></div>                     <div class="row mb-3">                            <label for="nombre_frecuencia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombre_frecuencia")</label><div class="col-md-6"><input id="nombre_frecuencia" type="text" value="{{$registro->nombre_frecuencia}}" class="form-control" name="nombre_frecuencia" readonly></div></div>
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
