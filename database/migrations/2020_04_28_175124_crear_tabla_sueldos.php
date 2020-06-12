<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaSueldos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sueldos', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedBigInteger('cedula');
            $table->foreign('cedula')->references('cedula')->on('empleados')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->string('cargo',20);
            $table->decimal('sueldo_mensual',10,2);
            $table->date('fecha');
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            // ---  Relaciones entre tablas.

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sueldos');
    }
}
