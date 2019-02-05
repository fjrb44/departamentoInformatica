<?php

use App\TramoHorario;

use Illuminate\Database\Seeder;

class TramosHorariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TramoHorario::create([
            'dia' => 'L',
            'hora' => '1',
            'inicio' => '8:15',
            'fin' => '9:15',
            'texto' => 'Lunes a 1º'
        ]);
    }
}
