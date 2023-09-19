@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Curso</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('cursos.index') }}"> Back</a>
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
  
    <form action="{{ route('cursos.update',$curso->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>numero:</strong>
                    <input type="text" name="numero" value="{{ $curso->numero }}" class="form-control" placeholder="numero">
                </div>
                <div class="form-group">
                    <strong>nombre:</strong>
                    <input type="text" name="nombre" value="{{ $curso->nombre }}" class="form-control" placeholder="nombre">
                </div>
                <div class="form-group">
                    <strong>nivel:</strong>
                    <input type="text" name="nivel" value="{{ $curso->nivel }}" class="form-control" placeholder="nivel">
                </div>
                <div class="form-group">
                    <strong>subnivel:</strong>
                    <input type="text" name="subnivel" value="{{ $curso->subnivel }}" class="form-control" placeholder="subnivel">
                </div>
                <div class="form-group">
                    <strong>area:</strong>
                    <input type="text" name="area" value="{{ $curso->area }}" class="form-control" placeholder="area">
                </div>
                <div class="form-group">
                    <strong>imagen:</strong>
                    <input type="text" name="imagen" value="{{ $curso->imagen }}" class="form-control" placeholder="imagen">
                </div>
                <div class="form-group">
                    <strong>objetivo:</strong>
                    <input type="text" name="objetivo" value="{{ $curso->objetivo }}" class="form-control" placeholder="objetivo">
                </div>
                <div class="form-group">
                    <strong>user_id:</strong>
                    <input type="text" name="user_id" value="{{ $curso->user_id }}" class="form-control" placeholder="user_id">
                </div>
                <div class="form-group">
                    <strong>activo:</strong>
                    <input type="text" name="activo" value="{{ $curso->activo }}" class="form-control" placeholder="activo">
                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
    </div>
@endsection