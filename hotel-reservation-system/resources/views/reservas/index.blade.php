@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Listado de Reservas</h2>
    
    <table class="table table-striped table-bordered bg-light">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Habitación</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Fin</th>
                <th>Estado</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservas as $reserva)
            <tr>
                <td>{{ $reserva->id }}</td>
                <td>{{ $reserva->cliente->nombre }}</td>
                <td>{{ $reserva->habitacion->numero }} - {{ $reserva->habitacion->tipo }}</td>
                <td>{{ $reserva->fecha_inicio }}</td>
                <td>{{ $reserva->fecha_fin }}</td>
                <td>{{ ucfirst($reserva->estado) }}</td>
                <td>${{ number_format($reserva->total, 2) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
