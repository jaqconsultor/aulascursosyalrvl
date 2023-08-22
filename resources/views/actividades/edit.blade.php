@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Actividades</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('actividades.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('actividades.update',$actividade->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>numero:</strong>
                    <input type="text" name="numero" value="{{ $actividade->numero }}" class="form-control" placeholder="numero">
                </div>

                <div class="form-group">
                    <strong>nombre:</strong>
                    <input type="text" name="nombre" value="{{ $actividade->nombre }}" class="form-control" placeholder="nombre">
                </div>

                <div class="form-group">
                    <strong>curso_id:</strong>
                    <input type="text" name="curso_id" value="{{ $actividade->curso_id }}" class="form-control" placeholder="actividade_id">
                </div>

                <div class="form-group">
                {!! $tema_id !!}
</div>
                </div>
                <div class="form-group">
                  
                {!! $tipo_actividad_id !!}
</div>
                </div>
                <div class="form-group">

                {!! $formato_archivo_id !!}
</div>

                <div class="form-group">
                    <strong>nombre_recurso:</strong>
                    <input type="text" name="nombre_recurso" value="{{ $actividade->nombre_recurso }}" class="form-control" placeholder="nombre_recurso">
                </div>

                <div class="form-group">
                    <strong>activo:</strong>
                    <input type="text" name="activo" value="{{ $actividade->activo }}" class="form-control" placeholder="activo">
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
    </div>
@endsection