@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Actividades</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('actividades.create') }}"> Crear</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}
            </p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Numero</th>
            <th>Nombre</th>
            <th>curso_id</th>
            <th>tema_id</th>
            <th>tipo_actividad_id</th>
            <th>formato_archivo_id</th>
            <th>nombre_recurso</th>
            <th>activo</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($actividades as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->numero }}</td>
            <td>{{ $product->nombre }}</td>
            <td>{{ $product->curso_id }}</td>
            <td>{{ $product->tema->nombre }}</td>
            <td>{{ $product->tipo_actividad->nombre }}</td>
            <td>{{ $product->formato_archivo->nombre }}</td>
            <td>{{ $product->nombre_recurso }}</td>
            <td>{{ $product->activo }}</td>
            <td>
                <form action="{{ route('actividades.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('actividades.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('actividades.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $actividades->links() !!}
      

    </div>   
@endsection