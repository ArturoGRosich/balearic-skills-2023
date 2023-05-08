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
        Schema::create('espais', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('illa', 20);
            $table->string('municipi', 20);
            $table->string('zona', 20);
            $table->string('adreça', 100);
            $table->string('telefon', 15);
            $table->string('web', 255);
            $table->string('email', 255);
            $table->string('modalitat_art', 30);
            $table->foreignId('arquitecte_id');
            $table->timestamp('any_construcció');
            $table->foreignId('accesibilitat_type_id')->references('id')->on('accesibilitat_types');
            $table->foreignId('gestor_id')->references('id')->on('users');
            $table->boolean('is_destacat');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espais');
    }
};
