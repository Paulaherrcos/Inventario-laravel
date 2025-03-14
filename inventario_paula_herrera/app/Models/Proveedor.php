<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $table='proveedores';
    protected $fillable = [
        'nombre',
        'correo_contacto',
        'telefono',
    ];

    public function productos()
    {
        return $this->hasMany(Producto::class);
   }
}

// INSERT INTO productos (nombre, descripcion, precio, cantidad, categoria_id, proveedor_id)
// VALUES ('Smartphone', 'Descripción del producto', 299.99, 50, 1, 1);
