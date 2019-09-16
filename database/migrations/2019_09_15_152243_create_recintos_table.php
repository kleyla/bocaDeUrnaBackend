<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecintosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recintos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('sigla');
            $table->string('ubicacion')->nullable();
            $table->unsignedBigInteger('provincia_id')->nullable();
            $table->foreign('provincia_id')->references('id')->on('provincias')->onDelete('cascade')
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
        Schema::dropIfExists('recintos');
    }
}
