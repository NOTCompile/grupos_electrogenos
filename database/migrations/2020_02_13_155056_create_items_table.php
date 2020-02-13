<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('estado')->nullable();
            $table->string('comentarios')->nullable();
            $table->string('ejecucion')->nullable();
            $table->string('vacio')->nullable();
            $table->string('carga')->nullable();
            $table->unsignedBigInteger('lista_id');
            $table->foreign('lista_id')->references('id')->on('listas');
            
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
        Schema::dropIfExists('items');
    }
}
