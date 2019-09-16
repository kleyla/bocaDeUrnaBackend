<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMesasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mesas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('codigo');
            $table->string('apellido_inicial')->nullable();
            $table->string('apellido_final')->nullable();
            $table->unsignedBigInteger('recinto_id')->nullable();
            $table->foreign('recinto_id')->references('id')->on('recintos')->onDelete('cascade')
                ->onUpdate('cascade');
            
            $table->boolean('estado')->default(true);
            $table->timestamps();
        });
        Schema::table('encargados', function (Blueprint $table) {
            $table->unsignedBigInteger('mesa_id')->nullable();
            $table->foreign('mesa_id')->references('id')->on('mesas')->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mesas');
    }
}
