@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Pelicula</h1>
    <table class="table">
        <tr>
            <th>Nombre</th>
            <td>{{ $pelicula->pelNombre }}</td>
        </tr>
        <tr>
            <th>Fecha de Estreno</th>
            <td>{{ $pelicula->pelFechaEstreno }}</td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>{{ $pelicula->pelPrecio }}</td>
        </tr>
    </table>
    <a href="{{ route('pelicula.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
