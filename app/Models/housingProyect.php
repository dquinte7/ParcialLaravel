<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class housingProyect extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'constructora',
        'departamento',
        'ciudad',
        'direccion',
        'tipo',
        'tamaño',
        'habitaciones',
        'baños',
        'parqueaderos',
        'valor'  
    ];
}
