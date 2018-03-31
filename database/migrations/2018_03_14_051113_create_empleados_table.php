<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condiciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->softDeletes();
        });


        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('apellido_nombre');
            $table->integer('antiguedad');
            $table->integer('condiciones_id');
            $table->foreign('condiciones_id')->references('id')->on('condiciones');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
