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
                     <div class="row mb-3">                            <label for="nac" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenac")</label><div class="col-md-6"><input id="nac" type="text"  value="{{$registro->nac}}" class="form-control" name="nac" required></div></div>                     <div class="row mb-3">                            <label for="cedula" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecedula")</label><div class="col-md-6"><input id="cedula" type="text"  value="{{$registro->cedula}}" class="form-control" name="cedula" required></div></div>                     <div class="row mb-3">                            <label for="apellidos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameapellidos")</label><div class="col-md-6"><input id="apellidos" type="text"  value="{{$registro->apellidos}}" class="form-control" name="apellidos" required></div></div>                     <div class="row mb-3">                            <label for="nombres" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenombres")</label><div class="col-md-6"><input id="nombres" type="text"  value="{{$registro->nombres}}" class="form-control" name="nombres" required></div></div>                     <div class="row mb-3">                            <label for="sexo" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesexo")</label><div class="col-md-6"><input id="sexo" type="text"  value="{{$registro->sexo}}" class="form-control" name="sexo" required></div></div>                     <div class="row mb-3">                            <label for="fnacimiento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefnacimiento")</label><div class="col-md-6"><input id="fnacimiento" type="text"  value="{{$registro->fnacimiento}}" class="form-control" name="fnacimiento" required></div></div>                     <div class="row mb-3">                            <label for="lnacimiento" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namelnacimiento")</label><div class="col-md-6"><input id="lnacimiento" type="text"  value="{{$registro->lnacimiento}}" class="form-control" name="lnacimiento" required></div></div>                     <div class="row mb-3">                            <label for="codeestado" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodeestado")</label><div class="col-md-6"><input id="codeestado" type="text"  value="{{$registro->codeestado}}" class="form-control" name="codeestado" required></div></div>                     <div class="row mb-3">                            <label for="direccion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedireccion")</label><div class="col-md-6"><input id="direccion" type="text"  value="{{$registro->direccion}}" class="form-control" name="direccion" required></div></div>                     <div class="row mb-3">                            <label for="telefono" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametelefono")</label><div class="col-md-6"><input id="telefono" type="text"  value="{{$registro->telefono}}" class="form-control" name="telefono" required></div></div>                     <div class="row mb-3">                            <label for="fingreso" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefingreso")</label><div class="col-md-6"><input id="fingreso" type="text"  value="{{$registro->fingreso}}" class="form-control" name="fingreso" required></div></div>                     <div class="row mb-3">                            <label for="escolaridad" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameescolaridad")</label><div class="col-md-6"><input id="escolaridad" type="text"  value="{{$registro->escolaridad}}" class="form-control" name="escolaridad" required></div></div>                     <div class="row mb-3">                            <label for="ocupacion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameocupacion")</label><div class="col-md-6"><input id="ocupacion" type="text"  value="{{$registro->ocupacion}}" class="form-control" name="ocupacion" required></div></div>                     <div class="row mb-3">                            <label for="codesegemp" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecodesegemp")</label><div class="col-md-6"><input id="codesegemp" type="text"  value="{{$registro->codesegemp}}" class="form-control" name="codesegemp" required></div></div>                     <div class="row mb-3">                            <label for="numhistoria" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namenumhistoria")</label><div class="col-md-6"><input id="numhistoria" type="text"  value="{{$registro->numhistoria}}" class="form-control" name="numhistoria" required></div></div>                     <div class="row mb-3">                            <label for="foto_pac" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namefoto_pac")</label><div class="col-md-6"><input id="foto_pac" type="text"  value="{{$registro->foto_pac}}" class="form-control" name="foto_pac" required></div></div>                     <div class="row mb-3">                            <label for="profesion" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameprofesion")</label><div class="col-md-6"><input id="profesion" type="text"  value="{{$registro->profesion}}" class="form-control" name="profesion" required></div></div>                     <div class="row mb-3">                            <label for="email" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemail")</label><div class="col-md-6"><input id="email" type="text"  value="{{$registro->email}}" class="form-control" name="email" required></div></div>                     <div class="row mb-3">                            <label for="dependencia" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedependencia")</label><div class="col-md-6"><input id="dependencia" type="text"  value="{{$registro->dependencia}}" class="form-control" name="dependencia" required></div></div>                     <div class="row mb-3">                            <label for="medico" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemedico")</label><div class="col-md-6"><input id="medico" type="text"  value="{{$registro->medico}}" class="form-control" name="medico" required></div></div>                     <div class="row mb-3">                            <label for="sms" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesms")</label><div class="col-md-6"><input id="sms" type="text"  value="{{$registro->sms}}" class="form-control" name="sms" required></div></div>
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


