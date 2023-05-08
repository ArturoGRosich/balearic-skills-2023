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
        Schema::create('visita_expositiva_translations', function (Blueprint $table) {
            $table->id();
            $table->string('lang', 2);
            $table->foreignId('visita_expositiva_id')->references('id')->on('visites_expositives');
            $table->unique(['visita_expositiva_id', 'lang']);
        
            $table->string('titol', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visita_expositiva_translations');
    }
};