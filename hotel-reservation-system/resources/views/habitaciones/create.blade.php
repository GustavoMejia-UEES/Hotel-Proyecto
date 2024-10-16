@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Agregar Habitación</h2>
    
    <div class="card p-4 bg-light">
        <form action="{{ route('habitaciones.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="numero" class="form-label">Número de Habitación</label>
                <input type="text" class="form-control" id="numero" name="numero" required>
            </div>
            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo de Habitación</label>
                <input type="text" class="form-control" id="tipo" name="tipo" required>
            </div>
            <div class="mb-3">
                <label for="capacidad" class="form-label">Capacidad</label>
                <input type="number" class="form-control" id="capacidad" name="capacidad" required>
            </div>
            <div class="mb-3">
                <label for="precio_noche" class="form-label">Precio por Noche</label>
                <input type="number" step="0.01" class="form-control" id="precio_noche" name="precio_noche" required>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-select" id="estado" name="estado" required>
                    <option value="disponible">Disponible</option>
                    <option value="ocupada">Ocupada</option>
                    <option value="en mantenimiento">En Mantenimiento</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Habitación</button>
        </form>
    </div>
</div>
@endsection
