<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AccesibilitatType;
use App\Models\Arquitecte;
use App\Models\EspaiImatge;
use App\Models\Espais;
use App\Models\EspaiType;
use App\Models\User;
use Carbon\Factory;
use DateTime;
use Illuminate\Database\Seeder;

class Espais_seeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $arquitecte = new Arquitecte();
        $arquitecte->university = 'Pamplona';
        $arquitecte->name = 'Paco';
        $arquitecte->save();

        $espaiType = new EspaiType();
        $espaiType->name = 'Religioso';
        $espaiType->save();

        $accesivilitat_type = new AccesibilitatType();
        $accesivilitat_type->name = 'private';
        $accesivilitat_type->save();

        $gestor = User::factory()->create();

        $espai = new Espais();
        $espai->name = "Catedral";
        $espai->illa = 'Palma';
        $espai->municipi = 'Palma';
        $espai->adreça = 'Palma';
        $espai->zona = 'Palma';
        $espai->telefon = 'Palma';
        $espai->web = 'Palma';
        $espai->email = 'palma';
        $espai->modalitat_art = 'Palma';
        $espai->arquitecte_id = $arquitecte->id;
        $espai->any_construcció = new DateTime('now');
        $espai->accesibilitat_type_id = $accesivilitat_type->id;
        $espai->gestor_id = $gestor->id;
        $espai->is_destacat = 0;


        $espai->save();

        $espaiImatge = new EspaiImatge();
        $espaiImatge->espai_id = $espai->id;
        $espaiImatge->slug = 'test';
        $espaiImatge->url = '/uploads/1-1.jpg';
        $espaiImatge->save();
    }
}
