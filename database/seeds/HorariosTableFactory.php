<?php

use Illuminate\Database\Seeder;

class HorariosTableFactory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Horario', 30)->create();
    }
}
