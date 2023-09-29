<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('detalle', function (Blueprint $table) {
        $table->primary(['cod_serv', 'fecha', 'hora']);
        $table->integer('cod_serv');
        $table->date('fecha');
        $table->string('hora');
        $table->timestamps();
        $table->integer('precio_final');
        $table->foreign('cod_serv')->references('codigo_servicio')->on('servicio');
        $table->foreign('fecha')->references('fecha')->on('reserva');
        $table->foreign('hora')->references('hora')->on('reserva');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle');
    }
};
