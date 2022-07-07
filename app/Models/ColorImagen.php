<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorImagen extends Model
{
    use HasFactory;

    protected $table = 'colores_imagenes';
    protected $fillable = [
        'color_id', 'ruta_imagen', 'orden'
    ];

    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }
}
