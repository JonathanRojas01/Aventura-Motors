<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;

    protected $table = 'colores';
    protected $fillable = [
        'modelo_id', 'codigo_hexadecimal', 'orden'
    ];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }

    public function colores_imagenes()
    {
        return $this->hasMany(ColorImagen::class);
    }
}
