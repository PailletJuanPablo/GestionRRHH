<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->string('antiguedad')->change();

        });

      

        Schema::table('ausencias', function (Blueprint $table) {
            $table->string('tipo_ausencia');	
            $table->string('fecha_ausencia')->change();
            

        });

    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
