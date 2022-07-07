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
        Schema::create('modelos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('slug');
            $table->unsignedBigInteger('marca_id');
            $table->unsignedBigInteger('categoria_id');
            $table->string('ficha');
            $table->decimal('precio_desde', 13, 2);
            $table->string('texto_oferta');
            $table->unsignedInteger('is_oferta');
            $table->text('condiciones');
            $table->string('vista_3d');
            $table->string('video');
            $table->string('recorrido_virtual');
            $table->string('imagen_principal');
            $table->string('imagen_principal_2');
            $table->integer('estado');
            $table->timestamps();

            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('categoria_id')->references('id')->on('categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modelos');
    }
};
