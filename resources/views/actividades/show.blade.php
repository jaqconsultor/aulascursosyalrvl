@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Curso</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('actividades.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">

                  <div class="form-group">
                <strong>Id:</strong>
                {{ $actividade->id }}
            </div>
            <div class="form-group">
                <strong>numero:</strong>
                {{ $actividade->numero }}
            </div>
            <div class="form-group">
                <strong>nombre:</strong>
                {{ $actividade->nombre }}
            </div>
            <div class="form-group">
                <strong>curso_id:</strong>
                {{ $actividade->curso_id }}
            </div>
            <div class="form-group">
                <strong>tema_id:</strong>
                {{ $actividade->tipo_actividad_id }}
            </div>
            <div class="form-group">
                <strong>nombre_recurso:</strong>
                {{ $actividade->nombre_recurso }}
            </div>
            <div class="form-group">
                <strong>activo:</strong>
                {{ $actividade->activo }}
            </div>

        </div>
    </div>
    </div>
@endsection