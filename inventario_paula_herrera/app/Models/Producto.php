<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
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
}
