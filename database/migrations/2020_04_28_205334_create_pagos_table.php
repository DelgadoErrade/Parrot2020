<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();

            $table->foreignId('id_comprobantes');
            $table->foreignId('id_banco');
            $table->string('forma_pago',15);
            $table->string('referencia', 6);
            $table->decimal('monto_pago', 12,2);

            $table->timestamps();
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
            // Relaciones entre tablas
            $table->foreign('id_comprobantes')->references('id')->on('comprobantes')
            ->onUpdate('CASCADE')
            ->onDelete('CASCADE');

            $table->foreign('id_banco')->references('id')->on('bancos')
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
        Schema::dropIfExists('pagos');
    }
}
