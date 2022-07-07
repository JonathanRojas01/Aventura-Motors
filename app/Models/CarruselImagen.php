<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarruselImagen extends Model
{
    use HasFactory;

    protected $table = 'carrusel_imagenes';
    protected $fillable = [
        'modelo_id', 'ruta_imagen', 'descripcion', 'orden', 'estado'
    ];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }
}
