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
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idpagina');
            $table->foreign('idpagina')->references('id')->on('paginas')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('idrole');
            $table->foreign('idrole')->references('id')->on('roles')->onUpdate('cascade')->onDelete('cascade');
            $table->string('description');
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
        Schema::dropIfExists('links');
    }
};
