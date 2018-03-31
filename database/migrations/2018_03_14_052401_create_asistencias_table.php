<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias', function (Blueprint $table) {
            $table->softDeletes();
            $table->increments('id');
            $table->integer('empleados_id')->unsigned();
            $table->foreign('empleados_id')->references('id')->on('empleados');
            $table->date('fecha_asistencia');	
            $table->time('horario_entrada');	
            $table->time('horario_salida');	
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
        Schema::dropIfExists('asistencias');
    }
}
