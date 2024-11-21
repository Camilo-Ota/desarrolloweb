<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    /**
     * Crear un nuevo pedido.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        // Validar los datos del pedido
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'productos' => 'required|array', // Debe ser un arreglo
            'valorTotal' => 'required|numeric', // Total debe ser un número
        ]);

        try {
            // Crear el pedido
            $pedido = Pedido::create([
                'nombre' => $validated['nombre'],
                'telefono' => $validated['telefono'],
                'direccion' => $validated['direccion'],
                'productos' => json_encode($validated['productos']), // Convertir los productos a JSON
                'valor_total' => $validated['valorTotal'],
            ]);

            // Retornar una respuesta exitosa
            return response()->json([
                'message' => 'Pedido creado exitosamente.',
                'pedido' => $pedido,
            ], 201);
        } catch (\Exception $e) {
            // Manejar errores
            return response()->json([
                'message' => 'Ocurrió un error al crear el pedido.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Listar todos los pedidos.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        try {
            // Obtener todos los pedidos
            $pedidos = Pedido::all();

            return response()->json([
                'message' => 'Pedidos obtenidos exitosamente.',
                'pedidos' => $pedidos,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Ocurrió un error al obtener los pedidos.',
                'error' => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Obtener un pedido específico por su ID.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id)
    {
        try {
            $pedido = Pedido::findOrFail($id);

            return response()->json([
                'message' => 'Pedido obtenido exitosamente.',
                'pedido' => $pedido,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Ocurrió un error al obtener el pedido.',
                'error' => $e->getMessage(),
            ], 404);
        }
    }

    /**
     * Actualizar un pedido.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $id)
    {
        // Validar los datos del pedido
        $validated = $request->validate([
            'nombre' => 'string|max:255',
            'telefono' => 'string|max:255',
            'direccion' => 'string|max:255',
            'productos' => 'array',
            'valorTotal' => 'numeric',
        ]);

        try {
            $pedido = Pedido::findOrFail($id);

            // Actualizar los campos necesarios
            $pedido->update([
                'nombre' => $validated['nombre'] ?? $pedido->nombre,
                'telefono' => $validated['telefono'] ?? $pedido->telefono,
                'direccion' => $validated['direccion'] ?? $pedido->direccion,
                'productos' => isset($validated['productos']) ? json_encode($validated['productos']) : $pedido->productos,
                'valor_total' => $validated['valorTotal'] ?? $pedido->valor_total,
            ]);

            return response()->json([
                'message' => 'Pedido actualizado exitosamente.',
                'pedido' => $pedido,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Ocurrió un error al actualizar el pedido.',
                'error' => $e->getMessage(),
            ], 404);
        }
    }

    /**
     * Eliminar un pedido.
     *
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy($id)
    {
        try {
            $pedido = Pedido::findOrFail($id);
            $pedido->delete();

            return response()->json([
                'message' => 'Pedido eliminado exitosamente.',
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'message' => 'Ocurrió un error al eliminar el pedido.',
                'error' => $e->getMessage(),
            ], 404);
        }
    }
}
