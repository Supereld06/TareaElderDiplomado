<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $buscar = $request->buscar;

        $productos = Producto::with('categoria')
            ->when($buscar, function ($query) use ($buscar) {
                $query->where('nombre', 'like', "%$buscar%");
            })
            ->orderBy('id', 'desc')
            ->paginate(10);

        return view('productos.index', compact('productos'));
    }

    public function create()
    {
        $categorias = Categoria::all();

        return view('productos.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required',
            'stock' => 'required',
            'categoria_id' => 'required'
        ]);

        Producto::create($request->all());

        return redirect('/productos')
            ->with('success', 'Producto registrado correctamente');
    }

    public function show($id)
    {
        $producto = Producto::with('categoria')->findOrFail($id);

        return view('productos.show', compact('producto'));
    }

    public function edit($id)
    {
        $producto = Producto::findOrFail($id);

        $categorias = Categoria::all();

        return view('productos.edit', compact(
            'producto',
            'categorias'
        ));
    }

    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $producto->update($request->all());

        return redirect('/productos')
            ->with('success', 'Producto actualizado correctamente');
    }

    public function destroy($id)
    {
        Producto::destroy($id);

        return redirect('/productos')
            ->with('success', 'Producto eliminado correctamente');
    }
}
