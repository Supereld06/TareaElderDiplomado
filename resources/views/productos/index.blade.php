@extends('layouts.app')

@section('contenido')

    <h2>Listado de Productos</h2>

    <div class="row mb-3">

        <div class="col-md-6">
            <form>
                <input type="text" name="buscar" class="form-control" placeholder="Buscar producto">
            </form>
        </div>
        <div class="col-md-6 text-end">
            <a href="/productos/create" class="btn btn-success">
                + Nuevo Producto
            </a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th width="250">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->stock }}</td>
                    <td>{{ $producto->categoria->nombre }}</td>
                    <td>
                        <a href="/productos/show/{{ $producto->id }}" class="btn btn-info btn-sm">
                            Ver
                        </a>
                        <a href="/productos/edit/{{ $producto->id }}" class="btn btn-warning btn-sm">
                            Editar
                        </a>
                        <form action="/productos/delete/{{ $producto->id }}" method="POST" class="d-inline"
                            onsubmit="return confirm('¿Desea eliminar el producto {{ $producto->nombre }}? Esta acción no se puede deshacer.')">

                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm">
                                Eliminar
                            </button>

                        </form>

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

    {{ $productos->links() }}

@endsection