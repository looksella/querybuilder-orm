<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void // Crea la tabla de pedidos
    {
        Schema::create('pedidos', function (Blueprint $table) { // Tabla de pedidos
            $table->id();
            $table->string('producto');
            $table->integer('cantidad');
            $table->decimal('total', 8, 2);
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void // Elimina la tabla de pedidos
    {
        Schema::dropIfExists('pedidos');
    }
};