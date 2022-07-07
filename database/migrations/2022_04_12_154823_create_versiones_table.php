<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versiones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->unsignedBigInteger('modelo_id');
            $table->unsignedInteger('is_published');
            $table->decimal('precio_lista', 13, 2);
            $table->decimal('bono_marca', 13, 2);
            $table->decimal('bono_santander', 13, 2);
            $table->decimal('precio_final', 13, 2);
            $table->decimal('precio_lista_hyundai', 13, 2);
            $table->decimal('bono_importador_hyundai', 13, 2);
            $table->decimal('precio_bono_directo_hyundai', 13, 2);
            $table->decimal('precio_financiamiento_amicar_convencional_hyundai', 13, 2);
            $table->decimal('precio_financiamiento_amicar_maestro_hyundai', 13, 2);
            $table->string('motor');
            $table->string('transmision');
            $table->string('traccion');
            $table->string('combustible');
            $table->string('puertas');
            $table->string('cilindrada');
            $table->string('potencia_maxima');
            $table->string('torque');
            $table->string('caja_cambio');
            $table->string('neumaticos');
            $table->string('largo');
            $table->string('ancho');
            $table->string('alto');
            $table->string('distancia_entre_ejes');
            $table->string('peso');
            $table->string('capacidad_carga');
            $table->string('ciudad_km_l');
            $table->string('mixto_km_l');
            $table->string('emisiones_co2');
            $table->string('imagen_principal');
            $table->string('imagen_principal_2');
            $table->timestamps();

            $table->foreign('modelo_id')->references('id')->on('modelos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('versiones');
    }
};
