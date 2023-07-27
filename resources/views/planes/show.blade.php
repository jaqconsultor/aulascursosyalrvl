@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Planes</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('planes.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $plane->nombre }}
            </div>
        </div>
    </div>
    </div>
@endsection