<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('CARRERA');
            $table->string('BLOQUE');
            $table->string('SEMESTRE');
            $table->string('ASIGNATURA');
            $table->string('CLAVE');
            $table->string('CREDITOS');
            $table->string('GRADO');
            $table->string('COMPETENCIAS');
            $table->string('COLUMNA');
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
        Schema::dropIfExists('materias');
    }
}
