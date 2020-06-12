<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuincenasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quincenas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('cedula');
            $table->unsignedInteger('asig_dedu');
            $table->date('fecha');
            $table->date('desde');
            $table->date('hasta');
            $table->integer('id_comprobante')->unique();
            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            //  Relaciones entre tablsa

            $table->foreign('cedula')->references('cedula')->on('empleados')
                ->onUpdate('CASCADE')
                ->onDelete('CASCADE');

            $table->foreign('asig_dedu')->references('id')->on('asig_dedu')
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
        Schema::dropIfExists('quincenas');
    }
}
