<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('cedula')->unique();
            $table->string('apellidos', 20);
            $table->string('nombre',20);
            $table->date('fecha_nacimiento');
            $table->date('fecha_ingreso');
            $table->char('telefono',12);
            $table->string('direccion',150);
            $table->string('ciudad', 20);
            $table->char('zona_postal', 4);

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
        Schema::dropIfExists('empleados');
    }
}
