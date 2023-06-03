<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'producto',
        'costo',
        'direccion',
        'tarjeta',
        'fecha',
        'cvv',
        'id_user',
        'name_user'
    ];
}
