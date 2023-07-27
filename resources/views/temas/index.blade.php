@extends('layouts.app')
 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Temas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('temas.create') }}"> Crear</a>
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
        @foreach ($tema as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->nombre }}</td>
            <td>
                <form action="{{ route('temas.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('temas.show',$product->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('temas.edit',$product->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $tema->links() !!}
      

    </div>   
@endsection