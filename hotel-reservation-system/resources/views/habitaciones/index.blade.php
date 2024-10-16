@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="text-center">Listado de Habitaciones</h2>
    
    <table class="table table-striped table-bordered bg-light">
        <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Tipo</th>
                <th>Capacidad</th>
                <th>Precio por Noche</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($habitaciones as $habitacion)
            <tr>
                <td>{{ $habitacion->id }}</td>
                <td>{{ $habitacion->numero }}</td>
                <td>{{ $habitacion->tipo }}</td>
                <td>{{ $habitacion->capacidad }}</td>
                <td>${{ number_format($habitacion->precio_noche, 2) }}</td>
                <td>{{ ucfirst($habitacion->estado) }}</td>
                <td>
                    <a href="{{ route('habitaciones.edit', $habitacion->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('habitaciones.destroy', $habitacion->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
