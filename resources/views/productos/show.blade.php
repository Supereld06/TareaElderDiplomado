@extends('layouts.app')

@section('contenido')

    <h2>Detalle del Producto</h2>

    <table class="table table-bordered">

        <tr>
            <th>ID</th>
            <td>{{ $producto->id }}</td>
        </tr>

        <tr>
            <th>Nombre</th>
            <td>{{ $producto->nombre }}</td>
        </tr>

        <tr>
            <th>Descripción</th>
            <td>{{ $producto->descripcion }}</td>
        </tr>

        <tr>
            <th>Precio</th>
            <td>Bs. {{ $producto->precio }}</td>
        </tr>

        <tr>
            <th>Stock</th>
            <td>{{ $producto->stock }}</td>
        </tr>

        <tr>
            <th>Categoría</th>
            <td>{{ $producto->categoria->nombre }}</td>
        </tr>

    </table>

    <a href="/productos" class="btn btn-secondary">
        Volver
    </a>

@endsection