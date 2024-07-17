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
        Schema::create('participas', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('colaborador_id')->nullable();
            $table->unsignedBigInteger('proyecto_id')->nullable();

            $table->foreign('colaborador_id')
            ->references('id')
            ->on('colaboradors')->onDelete('cascade');

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
        Schema::dropIfExists('participas');
    }
};
