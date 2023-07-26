@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Tipos de Actividades</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tipoactividad.create') }}"> Crear</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nombre</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tipoactividad as $product)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $product->nombre }}</td>
            <td>
                <form action="{{ route('tipoactividad.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('tipoactividad.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('tipoactividad.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $tipoactividad->links() !!}
      

    </div>   
@endsection