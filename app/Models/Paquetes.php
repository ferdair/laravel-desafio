<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquetes extends Model
{
    use HasFactory;
    protected $table = 'paquetes';
    protected $fillable = ['id_cliente', 'origen', 'destino', 'detalle', 'precio', 'peso'];
}
