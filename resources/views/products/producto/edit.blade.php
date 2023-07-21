@extends('welcome')
@section('title', 'Editar Producto')
@section('content')
    <div class="container pt-3" style="width: 500px;">
        <form action="{{ url('/update-producto', $producto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Producto</label>
                <input type="text" class="form-control" name="producto" value="{{ $producto->producto }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input step="0.1" type="number" class="form-control" name="precio" value="{{ $producto->precio }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Cantidad</label>
                <input type="number" class="form-control" name="cantidad" value="{{ $producto->cantidad }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Fecha Entrega</label>
                <input type="date" class="form-control" name="fechaEntrega" value="{{ $producto->fechaEntrega }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <select class="form-select" name="tipo_id" value="{{ $producto->tipo->tipo }}">
                    <option></option>
                    @foreach ($tipos as $tipo)
                        <option value="{{ $tipo->id }}">{{ $tipo->tipo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mb-3">Actualizar</button>
            </div>
        </form>
    </div>
@endsection
