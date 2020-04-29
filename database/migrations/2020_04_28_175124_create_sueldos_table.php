<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSueldosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sueldos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('cedula');
            $table->string('cargo',20);
            $table->decimal('sueldo_mensual',10,2);
            $table->date('fecha');

            $table->timestamps();

            // ---  Relaciones entre tablas.

            $table->foreign('cedula')->references('cedula')->on('empleados')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');
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
