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
                     <div class="row mb-3">                            <label for="emp_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemp_id")</label><div class="col-md-6"><input id="emp_id" type="text"  value="{{$registro->emp_id}}" class="form-control" name="emp_id" required></div></div>                     <div class="row mb-3">                            <label for="manager_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namemanager_id")</label><div class="col-md-6"><input id="manager_id" type="text"  value="{{$registro->manager_id}}" class="form-control" name="manager_id" required></div></div>                     <div class="row mb-3">                            <label for="emp_fname" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemp_fname")</label><div class="col-md-6"><input id="emp_fname" type="text"  value="{{$registro->emp_fname}}" class="form-control" name="emp_fname" required></div></div>                     <div class="row mb-3">                            <label for="emp_lname" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nameemp_lname")</label><div class="col-md-6"><input id="emp_lname" type="text"  value="{{$registro->emp_lname}}" class="form-control" name="emp_lname" required></div></div>                     <div class="row mb-3">                            <label for="dept_id" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namedept_id")</label><div class="col-md-6"><input id="dept_id" type="text"  value="{{$registro->dept_id}}" class="form-control" name="dept_id" required></div></div>                     <div class="row mb-3">                            <label for="street" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestreet")</label><div class="col-md-6"><input id="street" type="text"  value="{{$registro->street}}" class="form-control" name="street" required></div></div>                     <div class="row mb-3">                            <label for="city" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namecity")</label><div class="col-md-6"><input id="city" type="text"  value="{{$registro->city}}" class="form-control" name="city" required></div></div>                     <div class="row mb-3">                            <label for="state" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestate")</label><div class="col-md-6"><input id="state" type="text"  value="{{$registro->state}}" class="form-control" name="state" required></div></div>                     <div class="row mb-3">                            <label for="zip_code" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namezip_code")</label><div class="col-md-6"><input id="zip_code" type="text"  value="{{$registro->zip_code}}" class="form-control" name="zip_code" required></div></div>                     <div class="row mb-3">                            <label for="phone" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namephone")</label><div class="col-md-6"><input id="phone" type="text"  value="{{$registro->phone}}" class="form-control" name="phone" required></div></div>                     <div class="row mb-3">                            <label for="status" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestatus")</label><div class="col-md-6"><input id="status" type="text"  value="{{$registro->status}}" class="form-control" name="status" required></div></div>                     <div class="row mb-3">                            <label for="ss_number" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namess_number")</label><div class="col-md-6"><input id="ss_number" type="text"  value="{{$registro->ss_number}}" class="form-control" name="ss_number" required></div></div>                     <div class="row mb-3">                            <label for="salary" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesalary")</label><div class="col-md-6"><input id="salary" type="text"  value="{{$registro->salary}}" class="form-control" name="salary" required></div></div>                     <div class="row mb-3">                            <label for="start_date" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namestart_date")</label><div class="col-md-6"><input id="start_date" type="text"  value="{{$registro->start_date}}" class="form-control" name="start_date" required></div></div>                     <div class="row mb-3">                            <label for="termination_date" class="col-md-4 col-form-label text-md-end">@lang("dicc.Nametermination_date")</label><div class="col-md-6"><input id="termination_date" type="text"  value="{{$registro->termination_date}}" class="form-control" name="termination_date" required></div></div>                     <div class="row mb-3">                            <label for="birth_date" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebirth_date")</label><div class="col-md-6"><input id="birth_date" type="text"  value="{{$registro->birth_date}}" class="form-control" name="birth_date" required></div></div>                     <div class="row mb-3">                            <label for="bene_health_ins" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebene_health_ins")</label><div class="col-md-6"><input id="bene_health_ins" type="text"  value="{{$registro->bene_health_ins}}" class="form-control" name="bene_health_ins" required></div></div>                     <div class="row mb-3">                            <label for="bene_life_ins" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebene_life_ins")</label><div class="col-md-6"><input id="bene_life_ins" type="text"  value="{{$registro->bene_life_ins}}" class="form-control" name="bene_life_ins" required></div></div>                     <div class="row mb-3">                            <label for="bene_day_care" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namebene_day_care")</label><div class="col-md-6"><input id="bene_day_care" type="text"  value="{{$registro->bene_day_care}}" class="form-control" name="bene_day_care" required></div></div>                     <div class="row mb-3">                            <label for="sex" class="col-md-4 col-form-label text-md-end">@lang("dicc.Namesex")</label><div class="col-md-6"><input id="sex" type="text"  value="{{$registro->sex}}" class="form-control" name="sex" required></div></div>
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


