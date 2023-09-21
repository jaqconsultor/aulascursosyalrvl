@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
<div class="col-md-11">
<div class="card">
<h5 class="card-header">
@lang('dicc.CrearPbcatcol')
</h5>
<div class="card-body">
<p class="card-text">
<form method='POST' action="{{ route('roles.store' }}">
@csrf
                     <div class="row mb-3">                            <label for="pbc_tnam" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_tnam")</label><div class="col-md-6"><input id="pbc_tnam" type="text"  class="form-control" name="pbc_tnam" required></div></div>                     <div class="row mb-3">                            <label for="pbc_tid" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_tid")</label><div class="col-md-6"><input id="pbc_tid" type="text"  class="form-control" name="pbc_tid" required></div></div>                     <div class="row mb-3">                            <label for="pbc_ownr" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_ownr")</label><div class="col-md-6"><input id="pbc_ownr" type="text"  class="form-control" name="pbc_ownr" required></div></div>                     <div class="row mb-3">                            <label for="pbc_cnam" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_cnam")</label><div class="col-md-6"><input id="pbc_cnam" type="text"  class="form-control" name="pbc_cnam" required></div></div>                     <div class="row mb-3">                            <label for="pbc_cid" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_cid")</label><div class="col-md-6"><input id="pbc_cid" type="text"  class="form-control" name="pbc_cid" required></div></div>                     <div class="row mb-3">                            <label for="pbc_labl" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_labl")</label><div class="col-md-6"><input id="pbc_labl" type="text"  class="form-control" name="pbc_labl" required></div></div>                     <div class="row mb-3">                            <label for="pbc_lpos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_lpos")</label><div class="col-md-6"><input id="pbc_lpos" type="text"  class="form-control" name="pbc_lpos" required></div></div>                     <div class="row mb-3">                            <label for="pbc_hdr" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_hdr")</label><div class="col-md-6"><input id="pbc_hdr" type="text"  class="form-control" name="pbc_hdr" required></div></div>                     <div class="row mb-3">                            <label for="pbc_hpos" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_hpos")</label><div class="col-md-6"><input id="pbc_hpos" type="text"  class="form-control" name="pbc_hpos" required></div></div>                     <div class="row mb-3">                            <label for="pbc_jtfy" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_jtfy")</label><div class="col-md-6"><input id="pbc_jtfy" type="text"  class="form-control" name="pbc_jtfy" required></div></div>                     <div class="row mb-3">                            <label for="pbc_mask" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_mask")</label><div class="col-md-6"><input id="pbc_mask" type="text"  class="form-control" name="pbc_mask" required></div></div>                     <div class="row mb-3">                            <label for="pbc_case" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_case")</label><div class="col-md-6"><input id="pbc_case" type="text"  class="form-control" name="pbc_case" required></div></div>                     <div class="row mb-3">                            <label for="pbc_hght" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_hght")</label><div class="col-md-6"><input id="pbc_hght" type="text"  class="form-control" name="pbc_hght" required></div></div>                     <div class="row mb-3">                            <label for="pbc_wdth" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_wdth")</label><div class="col-md-6"><input id="pbc_wdth" type="text"  class="form-control" name="pbc_wdth" required></div></div>                     <div class="row mb-3">                            <label for="pbc_ptrn" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_ptrn")</label><div class="col-md-6"><input id="pbc_ptrn" type="text"  class="form-control" name="pbc_ptrn" required></div></div>                     <div class="row mb-3">                            <label for="pbc_bmap" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_bmap")</label><div class="col-md-6"><input id="pbc_bmap" type="text"  class="form-control" name="pbc_bmap" required></div></div>                     <div class="row mb-3">                            <label for="pbc_init" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_init")</label><div class="col-md-6"><input id="pbc_init" type="text"  class="form-control" name="pbc_init" required></div></div>                     <div class="row mb-3">                            <label for="pbc_cmnt" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_cmnt")</label><div class="col-md-6"><input id="pbc_cmnt" type="text"  class="form-control" name="pbc_cmnt" required></div></div>                     <div class="row mb-3">                            <label for="pbc_edit" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_edit")</label><div class="col-md-6"><input id="pbc_edit" type="text"  class="form-control" name="pbc_edit" required></div></div>                     <div class="row mb-3">                            <label for="pbc_tag" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namepbc_tag")</label><div class="col-md-6"><input id="pbc_tag" type="text"  class="form-control" name="pbc_tag" required></div></div>
<div class="row mb-0">
<div class="col-md-8 offset-md-4">
<button type="submit" class="btn btn-primary">
@lang('dicc.CreateRegister')
</button>
<a href="{{ route('roles.index') }}" class="btn btn-default" >
<img src="/bootstrap-icons/icons/list.svg" />
<span class="d-none d-xl-inline-block">@lang('dicc.VerLista')</span>
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
@endsection
