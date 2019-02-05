<?php

use Illuminate\Database\Seeder;

class ImpartesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Imparte', 20)->create();
    }
}
