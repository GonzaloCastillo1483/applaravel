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
        Schema::create('mascota', function (Blueprint $table) {
            
            $table->unsignedInteger('cod_mascota')->autoIncrement();
            
            $table->string('nom_mascota');
            $table->string('rut_cliente');
            $table->timestamps();
            $table->foreign('rut_cliente')->references('rut_cliente')->on('cliente');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascota');
    }
};
