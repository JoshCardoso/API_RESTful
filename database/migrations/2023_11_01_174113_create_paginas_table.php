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
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('url');
            $table->string('estado');
            $table->string('nome');
            $table->string('descripcion');
            $table->string('icone');
            $table->string('tipo');
            $table->timestamps();
            $table->string('usuariocreate');
            $table->string('usuariomodification');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paginas');
    }
};
