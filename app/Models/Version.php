<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
    use HasFactory;

    protected $table = 'versiones';

    protected $fillable = [
        'nombre', 'slug', 'modelo_id', 'is_published', 'precio_lista', 'bono_marca', 'bono_santander', 'precio_final', 'precio_lista_hyundai', 'bono_importador_hyundai', 'precio_bono_directo_hyundai', 'precio_financiamiento_amicar_convencional_hyundai', 'precio_financiamiento_amicar_maestro_hyundai', 'motor', 'transmision', 'traccion', 'combustible', 'puertas', 'cilindrada', 'potencia_maxima', 'torque', 'caja_cambio', 'neumaticos', 'largo', 'ancho', 'alto', 'distancia_entre_ejes', 'peso', 'capacidad_carga', 'ciudad_km_l', 'mixto_km_l', 'emisiones_co2', 'imagen_principal', 'imagen_principal_2'
    ];

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }
}
