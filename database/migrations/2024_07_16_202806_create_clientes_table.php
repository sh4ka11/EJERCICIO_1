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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->integer('codigo');
            $table->string('tfno');
            $table->string('num_social');
            $table->string('domicilio');

            $table->unsignedBigInteger('proyecto_id')->nullable();

            $table->foreign('proyecto_id')
            ->references('id')
            ->on('proyectos')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
