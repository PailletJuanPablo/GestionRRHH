<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoAusenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido_nombre');
            $table->integer('antiguedad');
            $table->integer('condiciones_id')->unsigned();
            $table->foreign('condiciones_id')->references('id')->on('condiciones');
            $table->softDeletes();
        });
        
        Schema::create('tipos_ausencias', function (Blueprint $table) {
            $table->increments('id');
            $table->softDeletes();
            $table->string('nombre');
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
        Schema::dropIfExists('tipo_ausencias');
    }
}
