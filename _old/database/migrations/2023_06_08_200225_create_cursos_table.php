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
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->integer('numero');
            $table->string('nombre', 100);
            $table->string('nivel', 100);
            $table->string('subnivel', 100);
            $table->string('area', 100);
            $table->string('imagen', 100);
            $table->text('objetivo');
            $table->unsignedBigInteger('user_id')->nulleable();
            $table->foreign('user_id')->references('id')->on('users');    
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
        Schema::dropIfExists('cursos');
    }
};
