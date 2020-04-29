<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movimientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_banco');
            $table->foreignId('id_tipo_mov');
            $table->date('fecha');
            $table->string('referencia',45);
            $table->string('descripcion',100);
            $table->decimal('monto', 12,2);
            $table->timestamps();

            $table->foreign('id_banco')->references('id')->on('bancos')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table->foreign('id_tipo_mov')->references('id')->on('tip_movimientos')
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
        Schema::dropIfExists('movimientos');
    }
}
