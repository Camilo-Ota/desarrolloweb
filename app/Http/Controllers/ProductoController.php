<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Obtener todos los productos
    public function index()
    {
        // Esto debería devolver todos los productos desde la base de datos
        $productos = Producto::all();
        return response()->json($productos);
    }

    // Crear un nuevo producto
    public function store(Request $request)
    {
        // Validación de los datos recibidos
        $validated = $request->validate([
            'Categoria' => 'required|string',
            'Productos' => 'required|string',
            'Descripcion' => 'required|string',
            'Precio' => 'required|numeric',
            'Imagen' => 'required|string',
        ]);

        // Crear un nuevo producto
        $producto = Producto::create([
            'Categoria' => $validated['Categoria'],
            'Productos' => $validated['Productos'],
            'Descripcion' => $validated['Descripcion'],
            'Precio' => $validated['Precio'],
            'Imagen' => $validated['Imagen']
        ]);

        // Retornar el producto recién creado
        return response()->json($producto, 201);
    }
}
