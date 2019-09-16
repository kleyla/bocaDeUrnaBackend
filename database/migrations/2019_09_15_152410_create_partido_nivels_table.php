<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidoNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partido_nivels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('partido_id')->nullable();
            $table->foreign('partido_id')->references('id')->on('partidos')->onDelete('cascade')
                ->onUpdate('cascade');
            $table->unsignedBigInteger('nivel_id')->nullable();
            $table->foreign('nivel_id')->references('id')->on('nivels')->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('partido_nivels');
    }
}
