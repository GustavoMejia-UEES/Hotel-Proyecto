@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Realizar Reserva</h2>
    
    <div class="card p-4 bg-light">
        <form action="{{ route('reservas.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="cliente_id" class="form-label">Cliente</label>
                <select class="form-select" id="cliente_id" name="cliente_id" required>
                    @foreach ($clientes as $cliente)
                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="habitacion_id" class="form-label">Habitación</label>
                <select class="form-select" id="habitacion_id" name="habitacion_id" required>
                    @foreach ($habitaciones as $habitacion)
                        <option value="{{ $habitacion->id }}">#{{ $habitacion->numero }} - {{ $habitacion->tipo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="fecha_inicio" class="form-label">Fecha de Inicio</label>
                <input type="date" class="form-control" id="fecha_inicio" name="fecha_inicio" required>
            </div>
            <div class="mb-3">
                <label for="fecha_fin" class="form-label">Fecha de Fin</label>
                <input type="date" class="form-control" id="fecha_fin" name="fecha_fin" required>
            </div>
            <div class="mb-3">
                <label for="estado" class="form-label">Estado</label>
                <select class="form-select" id="estado" name="estado" required>
                    <option value="pendiente">Pendiente</option>
                    <option value="confirmada">Confirmada</option>
                    <option value="cancelada">Cancelada</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="total" class="form-label">Total a Pagar</label>
                <input type="number" step="0.01" class="form-control" id="total" name="total" required>
            </div>
            <button type="submit" class="btn btn-primary">Realizar Reserva</button>
        </form>
    </div>
</div>
@endsection
