<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
     protected $table='productos';
     protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'cantidad',
        'categoria_id',
        'proveedor_id',
    ];


   public function categoria(){
        return $this->belongsTo(Categoria::class);
   }

   public function proveedor()
   {
       return $this->belongsTo(Proveedor::class);
  }

  public function usuario()
   {
       return $this->belongsTo(User::class);
  }
}

// INSERT INTO proveedores (nombre, correo_contacto, telefono)
// VALUES ('Proveedor XYZ', 'contacto@proveedorxyz.com', '1234567890');
