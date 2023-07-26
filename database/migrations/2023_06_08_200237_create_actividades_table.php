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
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->string('nombre', 100);

            $table->unsignedBigInteger('curso_id')->nulleable();
            $table->foreign('curso_id')->references('id')->on('cursos');          

            $table->unsignedBigInteger('tema_id')->nulleable();
            $table->foreign('tema_id')->references('id')->on('temas');          

            $table->unsignedBigInteger('tipo_actividad_id')->nulleable();
            $table->foreign('tipo_actividad_id')->references('id')->on('tipo_actividad');          

            $table->unsignedBigInteger('formato_archivo_id')->nulleable();
            $table->foreign('formato_archivo_id')->references('id')->on('formato_archivo');          

            $table->string('nombre_recurso', 100);

            $table->integer('activo')->default(1);

            $table->timestamps();

        

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actividades');
    }
};
