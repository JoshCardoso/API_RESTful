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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idperson');
            $table->foreign('idperson')->references('id')->on('persons')->onUpdate('cascade')->onDelete('cascade');
            $table->string('usuario');
            $table->string('password');
            $table->string('habilitado');
            $table->date('date');
            $table->unsignedBigInteger('idrole');
            $table->foreign('idrole')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('usuarios');
    }
};
