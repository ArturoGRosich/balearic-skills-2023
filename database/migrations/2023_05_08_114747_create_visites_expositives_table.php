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
        Schema::create('visites_expositives', function (Blueprint $table) {
            $table->id();
            $table->string('titol', 50);
            $table->foreignId('espai_id');
            $table->timestamp('inici');
            $table->timestamp('fi');
            $table->boolean('is_inscripcio_previa');
            $table->integer('places');
            $table->integer('visites');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visites_expositives');
    }
};
