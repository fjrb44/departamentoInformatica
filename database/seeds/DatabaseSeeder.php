<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Desactiva la protección de Inserts en la BD
        Model::unguard();

        $this->call([
            ImpartesTableSeeder::class,
            HorariosTableSeeder::class,
        ]);

        // Reactiva
        Model::reguard();
    }
}
