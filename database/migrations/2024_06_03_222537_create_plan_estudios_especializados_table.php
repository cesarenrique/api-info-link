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
        Schema::create('plan_estudios_especializados', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nameSEO');
            $table->foreignId('plan_estudios_id')->nullable()->references('id')->on('plan_estudios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_estudios_especializados');
    }
};
