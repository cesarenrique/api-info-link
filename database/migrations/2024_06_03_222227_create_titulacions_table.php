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
        Schema::create('titulacions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nameSEO');
            $table->foreignId('centro_estudios_id')->references('id')->on('centro_estudios');
            $table->foreignId('grupo_titulaciones_id')->references('id')->on('grupo_titulacions');
            $table->foreignId('rama_titulaciones_id')->references('id')->on('rama_titulacions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('titulacions');
    }
};
