<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
   protected $fillable = [
    'categoria_id',
    'nombre',
    'descripcion',
    'precio',
    'stock',
    'imagen',
];

public function categoria()
{
    return $this->belongsTo(Categoria::class);
}
}
