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
        Schema::create('histoticos', function (Blueprint $table) {
            $table->id();
            $table->string('historico');
            $table->integer('id_usuario');
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
        Schema::dropIfExists('histoticos');
    }
};
