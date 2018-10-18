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
            $table->string('codigo');
            $table->integer('semestre');
            $table->string('nombre');
            $table->integer('creditos');
            $table->string('bloque');
            $table->string('c1')->default('0');
            $table->string('c2')->default('0');
            $table->string('c3')->default('0');
            $table->string('c4')->default('0');
            $table->string('c5')->default('0');
            $table->string('c6')->default('0');
            $table->string('c7')->default('0');
            $table->string('c8')->default('0');
            $table->string('c9')->default('0');
            $table->string('c10')->default('0');
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
