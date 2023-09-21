@extends('layouts.app')
@section('content')
@foreach ($registros as $registro)
<div class="row justify-content-center">
<div class="col-md-11"> 
<h5 class="card-header">
@lang('dicc.VerDepartment')
</h5>
<div class="card-body">
<p class="card-text">
                     <div class="row mb-3">                            <label for="dept_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedept_id")</label><div class="col-md-6"><input id="dept_id" type="text" value="{{$registro->dept_id}}" class="form-control" name="dept_id" readonly></div></div>                     <div class="row mb-3">                            <label for="dept_name" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedept_name")</label><div class="col-md-6"><input id="dept_name" type="text" value="{{$registro->dept_name}}" class="form-control" name="dept_name" readonly></div></div>                     <div class="row mb-3">                            <label for="dept_head_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedept_head_id")</label><div class="col-md-6"><input id="dept_head_id" type="text" value="{{$registro->dept_head_id}}" class="form-control" name="dept_head_id" readonly></div></div>
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
