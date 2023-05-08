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
        Schema::create('punt_de_interes_translation', function (Blueprint $table) {
            $table->id();
            $table->string('lang', 2);
            $table->foreignId('punt_de_interes_id')->references('id')->on('punts_de_interes');
            $table->unique(['punt_de_interes_id', 'lang']);
        
            $table->string('titol', 50);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('punt_de_interes_translation');
    }
};
