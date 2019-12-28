<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicacionMesaPartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicacion_mesa_partidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('votos');
            $table->unsignedBigInteger('mesa_id')->nullable();
            $table->foreign('mesa_id')->references('id')->on('mesas')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('partido_id')->nullable();
            $table->foreign('partido_id')->references('id')->on('partidos')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('publicacion_id')->nullable();
            $table->foreign('publicacion_id')->references('id')->on('publicacions')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->boolean('estado')->default(true);
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
        Schema::dropIfExists('publicacion_mesa_partidos');
    }
}
