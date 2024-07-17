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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();

            $table->integer('numero');
            $table->string('concepto');
            $table->decimal('cantidad', 8, 2);
            $table->date('fecha_pago');

            $table->unsignedBigInteger('colaborador_id')->nullable();
        
            $table->foreign('colaborador_id')
            ->references('id')
            ->on('colaboradors')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};
