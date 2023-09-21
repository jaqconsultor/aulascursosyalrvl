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
                     <div class="row mb-3">                            <label for="pbt_tnam" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbt_tnam")</label><div class="col-md-6"><input id="pbt_tnam" type="text"  value="{{$registro->pbt_tnam}}" class="form-control" name="pbt_tnam" required></div></div>                     <div class="row mb-3">                            <label for="pbt_tid" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbt_tid")</label><div class="col-md-6"><input id="pbt_tid" type="text"  value="{{$registro->pbt_tid}}" class="form-control" name="pbt_tid" required></div></div>                     <div class="row mb-3">                            <label for="pbt_ownr" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbt_ownr")</label><div class="col-md-6"><input id="pbt_ownr" type="text"  value="{{$registro->pbt_ownr}}" class="form-control" name="pbt_ownr" required></div></div>                     <div class="row mb-3">                            <label for="pbd_fhgt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbd_fhgt")</label><div class="col-md-6"><input id="pbd_fhgt" type="text"  value="{{$registro->pbd_fhgt}}" class="form-control" name="pbd_fhgt" required></div></div>                     <div class="row mb-3">                            <label for="pbd_fwgt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbd_fwgt")</label><div class="col-md-6"><input id="pbd_fwgt" type="text"  value="{{$registro->pbd_fwgt}}" class="form-control" name="pbd_fwgt" required></div></div>                     <div class="row mb-3">                            <label for="pbd_fitl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbd_fitl")</label><div class="col-md-6"><input id="pbd_fitl" type="text"  value="{{$registro->pbd_fitl}}" class="form-control" name="pbd_fitl" required></div></div>                     <div class="row mb-3">                            <label for="pbd_funl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbd_funl")</label><div class="col-md-6"><input id="pbd_funl" type="text"  value="{{$registro->pbd_funl}}" class="form-control" name="pbd_funl" required></div></div>                     <div class="row mb-3">                            <label for="pbd_fchr" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbd_fchr")</label><div class="col-md-6"><input id="pbd_fchr" type="text"  value="{{$registro->pbd_fchr}}" class="form-control" name="pbd_fchr" required></div></div>                     <div class="row mb-3">                            <label for="pbd_fptc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbd_fptc")</label><div class="col-md-6"><input id="pbd_fptc" type="text"  value="{{$registro->pbd_fptc}}" class="form-control" name="pbd_fptc" required></div></div>                     <div class="row mb-3">                            <label for="pbd_ffce" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbd_ffce")</label><div class="col-md-6"><input id="pbd_ffce" type="text"  value="{{$registro->pbd_ffce}}" class="form-control" name="pbd_ffce" required></div></div>                     <div class="row mb-3">                            <label for="pbh_fhgt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbh_fhgt")</label><div class="col-md-6"><input id="pbh_fhgt" type="text"  value="{{$registro->pbh_fhgt}}" class="form-control" name="pbh_fhgt" required></div></div>                     <div class="row mb-3">                            <label for="pbh_fwgt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbh_fwgt")</label><div class="col-md-6"><input id="pbh_fwgt" type="text"  value="{{$registro->pbh_fwgt}}" class="form-control" name="pbh_fwgt" required></div></div>                     <div class="row mb-3">                            <label for="pbh_fitl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbh_fitl")</label><div class="col-md-6"><input id="pbh_fitl" type="text"  value="{{$registro->pbh_fitl}}" class="form-control" name="pbh_fitl" required></div></div>                     <div class="row mb-3">                            <label for="pbh_funl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbh_funl")</label><div class="col-md-6"><input id="pbh_funl" type="text"  value="{{$registro->pbh_funl}}" class="form-control" name="pbh_funl" required></div></div>                     <div class="row mb-3">                            <label for="pbh_fchr" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbh_fchr")</label><div class="col-md-6"><input id="pbh_fchr" type="text"  value="{{$registro->pbh_fchr}}" class="form-control" name="pbh_fchr" required></div></div>                     <div class="row mb-3">                            <label for="pbh_fptc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbh_fptc")</label><div class="col-md-6"><input id="pbh_fptc" type="text"  value="{{$registro->pbh_fptc}}" class="form-control" name="pbh_fptc" required></div></div>                     <div class="row mb-3">                            <label for="pbh_ffce" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbh_ffce")</label><div class="col-md-6"><input id="pbh_ffce" type="text"  value="{{$registro->pbh_ffce}}" class="form-control" name="pbh_ffce" required></div></div>                     <div class="row mb-3">                            <label for="pbl_fhgt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbl_fhgt")</label><div class="col-md-6"><input id="pbl_fhgt" type="text"  value="{{$registro->pbl_fhgt}}" class="form-control" name="pbl_fhgt" required></div></div>                     <div class="row mb-3">                            <label for="pbl_fwgt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbl_fwgt")</label><div class="col-md-6"><input id="pbl_fwgt" type="text"  value="{{$registro->pbl_fwgt}}" class="form-control" name="pbl_fwgt" required></div></div>                     <div class="row mb-3">                            <label for="pbl_fitl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbl_fitl")</label><div class="col-md-6"><input id="pbl_fitl" type="text"  value="{{$registro->pbl_fitl}}" class="form-control" name="pbl_fitl" required></div></div>                     <div class="row mb-3">                            <label for="pbl_funl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbl_funl")</label><div class="col-md-6"><input id="pbl_funl" type="text"  value="{{$registro->pbl_funl}}" class="form-control" name="pbl_funl" required></div></div>                     <div class="row mb-3">                            <label for="pbl_fchr" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbl_fchr")</label><div class="col-md-6"><input id="pbl_fchr" type="text"  value="{{$registro->pbl_fchr}}" class="form-control" name="pbl_fchr" required></div></div>                     <div class="row mb-3">                            <label for="pbl_fptc" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbl_fptc")</label><div class="col-md-6"><input id="pbl_fptc" type="text"  value="{{$registro->pbl_fptc}}" class="form-control" name="pbl_fptc" required></div></div>                     <div class="row mb-3">                            <label for="pbl_ffce" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbl_ffce")</label><div class="col-md-6"><input id="pbl_ffce" type="text"  value="{{$registro->pbl_ffce}}" class="form-control" name="pbl_ffce" required></div></div>                     <div class="row mb-3">                            <label for="pbt_cmnt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbt_cmnt")</label><div class="col-md-6"><input id="pbt_cmnt" type="text"  value="{{$registro->pbt_cmnt}}" class="form-control" name="pbt_cmnt" required></div></div>
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


