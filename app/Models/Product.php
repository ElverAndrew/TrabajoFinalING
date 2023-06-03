<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'nombre',
        'descripcion_larga',
        'detalles',
        'image',
        'costo',
        'stock',
        'categoria',
        'id_categoria'
    ];
}
