@extends('layouts.app')

@section('contenido')

    <h2>Nuevo Producto</h2>

    <form action="/productos/store" method="POST">

        @csrf

        <div class="mb-3">
            <label>Nombre</label>
            <input type="text" name="nombre" class="form-control">
        </div>

        <div class="mb-3">
            <label>Descripción</label>
            <textarea name="descripcion" class="form-control"></textarea>
        </div>

        <div class="mb-3">
            <label>Precio</label>
            <input type="number" step="0.01" name="precio" class="form-control">
        </div>

        <div class="mb-3">
            <label>Stock</label>
            <input type="number" name="stock" class="form-control" value="0">
        </div>

        <div class="mb-3">
            <label>Categoría</label>

            <select name="categoria_id" class="form-select">

                @foreach($categorias as $categoria)

                    <option value="{{ $categoria->id }}">
                        {{ $categoria->nombre }}
                    </option>

                @endforeach

            </select>

        </div>

        <button class="btn btn-primary">
            Guardar
        </button>

        <a href="/productos" class="btn btn-secondary">
            Volver
        </a>

        <div class="text-end mt-4">

            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalCategoria">

                Registrar Categoría

            </button>

        </div>

    </form>

@endsection

<!-- Modal Categoría -->

<div class="modal fade" id="modalCategoria" tabindex="-1">

    <div class="modal-dialog">

        <div class="modal-content">

            <form action="/categorias/store" method="POST">

                @csrf

                <div class="modal-header">

                    <h5 class="modal-title">
                        Registrar Categoría
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                    </button>

                </div>

                <div class="modal-body">

                    <div class="mb-3">

                        <label>Nombre</label>

                        <input type="text" name="nombre" class="form-control" required>

                    </div>

                    <div class="mb-3">

                        <label>Descripción</label>

                        <textarea name="descripcion" class="form-control"></textarea>

                    </div>

                </div>

                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">

                        Cancelar

                    </button>

                    <button type="submit" class="btn btn-success">

                        Guardar Categoría

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>