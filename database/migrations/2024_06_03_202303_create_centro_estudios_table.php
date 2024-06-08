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
        Schema::create('centro_estudios', function (Blueprint $table) {
            $table->id();
            $table->string('numberId')->unique();
            $table->string('name');
            $table->string('nameSEO');
            $table->string('direccion');
            $table->string('CP');
            $table->string('tipo');
            $table->string('departamento');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('admin')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centro_estudios');
    }
};
