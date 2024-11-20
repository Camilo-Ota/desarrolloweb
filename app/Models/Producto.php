<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    // Desactivar el manejo automático de created_at y updated_at
    public $timestamps = false;

    // Otros atributos de tu modelo
    protected $fillable = [
        'id', 'Categoria', 'Productos', 'Descripcion', 'Precio', 'Imagen'
    ];
}
