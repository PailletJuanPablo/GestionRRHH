<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaDisponiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_disponibles', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer("cantidad");
            $table->integer("periodo");
            $table->integer('empleados_id')->unsigned();
            $table->foreign('empleados_id')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dia_disponibles');
    }
}
