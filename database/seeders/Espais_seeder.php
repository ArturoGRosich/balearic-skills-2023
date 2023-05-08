<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Espais;
use Illuminate\Database\Seeder;

class Espais_seeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $espai = new Espais();
        $espai->name = "Catedral";
        $espai->descripcio = "Esta es la mejor catedral del mundo";
        $espai->save();
    }
}
