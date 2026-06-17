@extends('layouts.app')

@section('contenido')

<h2>Nuevo Producto</h2>

<form action="/productos/store" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nombre</label>
        <input type="text"
            name="nombre"
            class="form-control">
    </div>

    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion"
            class="form-control"></textarea>
    </div>

    <div class="mb-3">
        <label>Precio</label>
        <input type="number"
            step="0.01"
            name="precio"
            class="form-control">
    </div>

    <div class="mb-3">
        <label>Stock</label>
        <input type="number"
            name="stock"
            class="form-control">
    </div>

    <div class="mb-3">
        <label>Categoría</label>

        <select name="categoria_id"
            class="form-select">

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

    <a href="/productos"
        class="btn btn-secondary">
        Volver
    </a>

</form>

@endsection