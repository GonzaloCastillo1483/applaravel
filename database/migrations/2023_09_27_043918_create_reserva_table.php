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
        Schema::create('reserva', function (Blueprint $table) {
            $table->primary(['fecha','hora']);
            $table->date('fecha');
            $table->dateTime('hora');
            $table->integer('cod_masc')->unsigned();
            $table->string('estado');
            $table->timestamps();
            $table->foreign('cod_masc')->references('cod_mascota')->on('mascota');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};

