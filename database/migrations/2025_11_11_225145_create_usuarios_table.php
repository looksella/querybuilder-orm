<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // Crea la tabla de usuarios
    {
        Schema::create('usuarios', function (Blueprint $table) { // Tabla de usuarios
            $table->id();
            $table->string('nombre');
            $table->string('correo');
            $table->string('telefono');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // Elimina la tabla de usuarios
    {
        Schema::dropIfExists('usuarios');
    }
};
