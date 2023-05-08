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
        $espaiImatge->url = '/uploads/1-2.jpg';
        $espaiImatge->save();
        $espai = new Espais();
        $espai->name = "Ayuntamiento";
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
        $espaiImatge->url = '/uploads/1.1.jpg';
        $espaiImatge->save();
        $espai = new Espais();
        $espai->name = "Castillo";
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
        $espaiImatge->url = '/uploads/2-2.jpg';
        $espaiImatge->save();
        $espai = new Espais();
        $espai->name = "Plaza major";
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
        $espaiImatge->url = '/uploads/2.jpg';
        $espaiImatge->save();
        $espai = new Espais();
        $espai->name = "Borja Moll";
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
        $espaiImatge->url = '/uploads/4.jpg';
        $espaiImatge->save();
        $espai = new Espais();
        $espai->name = "Templo de Randa";
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
        $espaiImatge->url = '/uploads/C1-1.jpg';
        $espaiImatge->save();
        $espai = new Espais();
        $espai->name = "Puerta de san antonio";
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
        $espaiImatge->url = '/uploads/C3-2.jpg';
        $espaiImatge->save();
        $espai = new Espais();
        $espai->name = "Plaza de españa";
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
        $espaiImatge->url = '/uploads/C3-3.jpg';
        $espaiImatge->save();
    }
}
