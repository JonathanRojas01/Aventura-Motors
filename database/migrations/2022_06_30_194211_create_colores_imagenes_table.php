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
        Schema::create('colores_imagenes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('color_id');
            $table->string('ruta_imagen');
            $table->unsignedInteger('orden');
            $table->timestamps();

            $table->foreign('color_id')->references('id')->on('colores');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('colores_imagenes');
    }
};
