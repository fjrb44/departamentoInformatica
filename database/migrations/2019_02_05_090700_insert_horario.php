<?php

use App\Horario;
use illuminate\support\facades\db;
use illuminate\database\eloquent\model;


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertHorario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();

        $datos = [
            [1, 1],
        ];

        for ($i = 0; $i < count($datos); $i++) {
            Horario::create([
                'modulo_id' => $datos[$i][0],
                'tramohorario_id' => $datos[$i][1],
            ]);

        }

        Model::reguard();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('tramo_horarios')->truncate();
    }
}
