<?php

use App\TramoHorario;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertTramoHorario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();

        //          Dia, Hora, Inicio, Fin
        // Ejemplo: 'L', '1', '8:15', '9:15'

        $datos = [
            [ 'L', '1', '8:15', '9:15' ],
            [ 'L', '2', '9:15', '10:15' ],
            [ 'L', '3', '10:15', '11:15' ],
        ];

        for ($i = 0; $i < count($datos); $i++) {
            TramoHorario::create([
                'dia' => $datos[$i][0],
                'hora' => $datos[$i][1],
                'inicio' => $datos[$i][2],
                'fin' => $datos[$i][3],
                'texto' => "{$datos[$i][2]}-{$datos[$i][3]}"
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
