<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo',10);
            $table->string('nombre', 200);
            $table->string('empresa', 50);
            $table->string('ubicacion', 200);
            $table->integer('celular');
            $table->string('periocidad', 20);
          
            $table->string('marca_motor', 50)->nullable();
            $table->string('modelo_motor', 50)->nullable();
            $table->string('nserie_motor', 50)->nullable();
            $table->string('potencia_motor', 50)->nullable();
            $table->string('marca_generador', 50)->nullable();
            $table->string('modelo_generador', 50)->nullable();
            $table->string('nserie_generador', 50)->nullable();
            $table->string('potencia_generador', 50)->nullable();
            $table->time('hora_inicio')->nullable();
            $table->time('hora_fin')->nullable();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')->references('id')->on('images');
            

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
        Schema::dropIfExists('equipos');
    }
}
