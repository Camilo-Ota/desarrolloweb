<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    // Especificar los campos que pueden ser asignados en masa
    protected $fillable = ['nombre', 'telefono', 'direccion', 'productos', 'valor_total'];

    // Especificar el nombre de la tabla
    protected $table = 'pedidos2';
}
