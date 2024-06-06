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
        Schema::create('localidads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('provincia_id')->references('id')->on('provincias')->cascadeOnDelete();
            $table->string('name');
            $table->string('nameSEO');
            $table->string("CP")->nullable();
            $table->string('latitud')->nullable();
            $table->string('longitud')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('localidads');
    }
};
