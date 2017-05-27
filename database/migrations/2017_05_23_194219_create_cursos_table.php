<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cursos', function (Blueprint $table){
        $table->increments('id');
        $table->string('clave', 5);
        $table->char('grupo', 1);
        $table->string('nombre_materia', 35);
        $table->string('rfc', 25);
        $table->string('apellidos_empleado', 45);
        $table->string('nombres_empleado', 45);
        $table->string('area_academica',10);
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
