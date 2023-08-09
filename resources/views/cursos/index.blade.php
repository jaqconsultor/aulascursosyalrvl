@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Cursos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('cursos.create') }}"> Crear</a>
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
            <th>Nombre</th>
            <th>Nivel</th>
            <th>Subnivel</th>
            <th>Area</th>
            <th>Imagen</th>
            <th>Objetivo</th>
            <th>Usuario</th>
            <th>Activo</th>


            <th width="280px">Action</th>
        </tr>
        @foreach ($cursos as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->nombre }}</td>
            <td>{{ $product->nivel }}</td>
            <td>{{ $product->subnivel }}</td>
            <td>{{ $product->area }}</td>
            <td>{{ $product->imagen }}</td>
            <td>{{ $product->objetivo }}</td>
            <td>{{ $product->user_id }}</td>
            <td>{{ $product->activo }}</td>
            <td>
                <form action="{{ route('cursos.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('cursos.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('cursos.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $cursos->links() !!}
      

    </div>   
@endsection