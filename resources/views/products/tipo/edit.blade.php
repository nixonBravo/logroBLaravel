@extends('welcome')
@section('title', 'Tipos Productos')
@section('content')
    <div class="container pt-3" style="width: 500px;">
        <form action="{{ url('/update-tipo', $tipo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Tipo Producto</label>
                <input type="text" class="form-control" name="tipo" value="{{$tipo->tipo}}">
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mb-3">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
