<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;

    protected $table = 'modelos';
    protected $fillable = [
        'nombre', 'slug', 'marca_id', 'categoria_id', 'ficha', 'precio_desde', 'texto_oferta', 'is_oferta', 'condiciones', 'vista_3d', 'video', 'recorrido_virtual', 'imagen_principal', 'imagen_principal_2', 'estado'
    ];
    
    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }
    
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function versiones()
    {
        return $this->hasMany(Version::class);
    }

    public function carrusel_imagenes()
    {
        return $this->hasMany(CarruselImagen::class);
    }

    public function colores()
    {
        return $this->hasMany(Color::class);
    }
}
