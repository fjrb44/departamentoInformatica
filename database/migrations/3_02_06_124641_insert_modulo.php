<?php

use App\Modulo;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;


use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertModulo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Model::unguard();

        //  Nombre, Siglas, Num_Horas, Codigo

        $datos = [
            [ '1DWEC', 'DWEC', '8', '1234' ],
            [ '2DWEC', 'DWEC', '10', '1235' ],
        ];

        for ($i = 0; $i < count($datos); $i++) {
            Modulo::create([
                'nombre' => $datos[$i][0],
                'siglas' => $datos[$i][1],
                'num_horas' => $datos[$i][2],
                'codigo' => $datos[$i][3],
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
        Schema::table('modulos', function (Blueprint $table) {
            //
        });
    }
}
