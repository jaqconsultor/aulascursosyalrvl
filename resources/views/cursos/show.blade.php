@extends('layouts.app')
  
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ver Curso</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Id:</strong>
                {{ $curso->id }}
            </div>
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $curso->nombre }}
            </div>
            <div class="form-group">
                <strong>numero:</strong>
                {{ $curso->numero }}
            </div>
            <div class="form-group">
                <strong>subnivel:</strong>
                {{ $curso->subnivel }}
            </div>
            <div class="form-group">
                <strong>area:</strong>
                {{ $curso->area }}
            </div>
            <div class="form-group">
                <strong>imagen:</strong>
                {{ $curso->imagen }}
            </div>
            <div class="form-group">
                <strong>objetivo:</strong>
                {{ $curso->objetivo }}
            </div>
            <div class="form-group">
                <strong>user_id:</strong>
                {{ $curso->user_id }}
            </div>
            <div class="form-group">
                <strong>activo:</strong>
                {{ $curso->activo }}
            </div>
        </div>
    </div>
    </div>
@endsection