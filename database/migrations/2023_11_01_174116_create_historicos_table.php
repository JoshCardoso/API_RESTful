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
        Schema::create('historicos', function (Blueprint $table) {
            $table->id();
            $table->string('historico');
            $table->unsignedBigInteger('idusuario');
            $table->foreign('idusuario')->references('id')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
            $table->date('data');
            $table->string('hora');
            $table->string('ip');
            $table->string('navedador');
            $table->string('usuario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historicos');
    }
};
