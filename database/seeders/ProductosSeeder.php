<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto; // Asegúrate de importar el modelo Producto

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Inserta los productos con los campos correspondientes, utilizando updateOrCreate
        Producto::updateOrCreate(
            ['id' => 1], // Condición para encontrar el producto (por ejemplo, usando el id)
            [
                'Categoria' => 'principales',
                'Productos' => 'Hamburguesa DOBLE queso',
                'Descripcion' => 'Hamburguesa doble queso cheddar con tocino, carne, pepinillos y tomate',
                'Precio' => 22000,
                'Imagen' => './imagenes/doblequeso.JPG',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 2], // Condición para encontrar el producto
            [
                'Categoria' => 'principales',
                'Productos' => 'Hamburguesa de pollo',
                'Descripcion' => 'Hamburguesa de pollo apanado con lechuga, pepinillos, tomates y queso cheddar',
                'Precio' => 19000,
                'Imagen' => './imagenes/depollo.JPG',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 3], // Condición para encontrar el producto
            [
                'Categoria' => 'principales',
                'Productos' => 'Hamburguesa doble CARNE',
                'Descripcion' => 'Hamburguesa doble carne con queso cheddar, carne, pepinillos y tomate',
                'Precio' => 23000,
                'Imagen' => './imagenes/doblecarne.JPG',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 4], // Condición para encontrar el producto
            [
                'Categoria' => 'principales',
                'Productos' => 'Pizza de pollo y champiñones',
                'Descripcion' => 'Combinación de pollo con champiñones',
                'Precio' => 21000,
                'Imagen' => './imagenes/champ.jpg',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 5], // Condición para encontrar el producto
            [
                'Categoria' => 'principales',
                'Productos' => 'Pizza hawaiana',
                'Descripcion' => 'Combinación ensalada y dulce de piña y jamón',
                'Precio' => 18000,
                'Imagen' => './imagenes/hawai.JPG',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 6], // Condición para encontrar el producto
            [
                'Categoria' => 'principales',
                'Productos' => 'Pizza de pepperoni',
                'Descripcion' => 'Clásica con rodajas de pepperoni crujiente',
                'Precio' => 19000,
                'Imagen' => './imagenes/pepperoni.JPG',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 7], // Condición para encontrar el producto
            [
                'Categoria' => 'entradas',
                'Productos' => 'Rollitos de primavera',
                'Descripcion' => 'Rollo elaborado de una pasta rellena de diferentes verduras picadas',
                'Precio' => 5000,
                'Imagen' => './imagenes/rollitos.jpg',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 8], // Condición para encontrar el producto
            [
                'Categoria' => 'entradas',
                'Productos' => 'Aros de cebolla',
                'Descripcion' => 'Cebollas cortadas en forma de anillo rebozados en harina con algo de levadura y fritos en aceite',
                'Precio' => 7000,
                'Imagen' => './imagenes/aritos.jpg',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 9], // Condición para encontrar el producto
            [
                'Categoria' => 'entradas',
                'Productos' => 'Palitos de mozzarella',
                'Descripcion' => 'Trozos alargados de queso mozzarella empanados y fritos',
                'Precio' => 10000,
                'Imagen' => './imagenes/sticks.jpeg',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 10], // Condición para encontrar el producto
            [
                'Categoria' => 'entradas',
                'Productos' => 'Nachos',
                'Descripcion' => 'Trozos de tortilla de maíz fritos, cubiertos de queso, chiles, tomates, cebollas y carne molida',
                'Precio' => 14000,
                'Imagen' => './imagenes/nachos.jfif',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 11], // Condición para encontrar el producto
            [
                'Categoria' => 'entradas',
                'Productos' => 'Jalapeños poppers',
                'Descripcion' => 'Chiles jalapeños ahuecados fritos, rellenos de queso, especias y carne molida',
                'Precio' => 11000,
                'Imagen' => './imagenes/jalapeño.jpg',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 12], // Condición para encontrar el producto
            [
                'Categoria' => 'entradas',
                'Productos' => 'Dumplings',
                'Descripcion' => 'Trozos de masa rellenos de carne o pescado, cocidos o horneados',
                'Precio' => 12000,
                'Imagen' => './imagenes/dumplings.JPG',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 13], // Condición para encontrar el producto
            [
                'Categoria' => 'bebidas',
                'Productos' => 'Limonada',
                'Descripcion' => 'Limonada dulce fría',
                'Precio' => 3000,
                'Imagen' => './imagenes/limonada.JPG',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 14], // Condición para encontrar el producto
            [
                'Categoria' => 'bebidas',
                'Productos' => 'Coca-Cola',
                'Descripcion' => 'Coca cola gaseosa de 400 ml',
                'Precio' => 3800,
                'Imagen' => './imagenes/coca-cola.JPG',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 15], // Condición para encontrar el producto
            [
                'Categoria' => 'bebidas',
                'Productos' => 'Cerveza',
                'Descripcion' => 'Cerveza poker en lata',
                'Precio' => 5000,
                'Imagen' => './imagenes/cerveza.jpg',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 16], // Condición para encontrar el producto
            [
                'Categoria' => 'postres',
                'Productos' => 'Helado de vainilla',
                'Descripcion' => 'Tres bolas de helado de vainilla',
                'Precio' => 5000,
                'Imagen' => './imagenes/vainilla.jpg',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 17], // Condición para encontrar el producto
            [
                'Categoria' => 'postres',
                'Productos' => 'Brownie con helado',
                'Descripcion' => 'Helado de avellanas encima de un brownie de chocolate',
                'Precio' => 7000,
                'Imagen' => './imagenes/brownie.JPG',
            ]
        );

        Producto::updateOrCreate(
            ['id' => 18], // Condición para encontrar el producto
            [
                'Categoria' => 'postres',
                'Productos' => 'Gelatina',
                'Descripcion' => 'Gelatina de sabores con frutas',
                'Precio' => 10000,
                'Imagen' => './imagenes/gelatina.JPG',
            ]
        );
    }
}
