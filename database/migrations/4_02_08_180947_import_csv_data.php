<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImportCsvData extends Migration
{
    /**
     * Las tablas que vamos a insertar
     */
    private $tables = [
        'ciclos',
        'cursos',
        'horarios',
        /* 'impartes', */
        'interfazs',
        'links',
        'miembros',
        'modulos',
        'tramo_horarios',
    ];

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->vaciarTablas();

        Schema::disableForeignKeyConstraints();

        $ruta = database_path('/Informacion/Tablas');

        // Ciclos
        if (($handle = fopen ( $ruta . '/ciclos.csv', 'r' )) !== FALSE) {
            $primera_linea = true;
            while (($data = fgetcsv($handle, ',')) !== FALSE) {
                // Me salto la primera linea del CSV
                if ($primera_linea) {
                    $primera_linea = !$primera_linea;
                    continue;
                }

                $csv_data = new App\Ciclo();
                $csv_data->nombre = $data[1];
                $csv_data->siglas = $data[2];
                $csv_data->competencias = ""; //data[3];
                $csv_data->save ();
            }
            fclose($handle);
        }

        // Cursos
        if (($handle = fopen ( $ruta . '/cursos.csv', 'r' )) !== FALSE) {
            $primera_linea = true;
            while (($data = fgetcsv($handle, ',')) !== FALSE) {
                // Me salto la primera linea del CSV
                if ($primera_linea) {
                    $primera_linea = !$primera_linea;
                    continue;
                }

                $csv_data = new App\Curso();
                $csv_data->nombre = $data[1];
                $csv_data->codigo = $data[2];
                $csv_data->ciclo_id = $data[3];
                $csv_data->tutor_id = $data[4];
                $csv_data->save ();
            }
            fclose($handle);
        }

        // Horarios
        if (($handle = fopen ( $ruta . '/horarios.csv', 'r' )) !== FALSE) {
            $primera_linea = true;
            while (($data = fgetcsv($handle, ',')) !== FALSE) {
                // Me salto la primera linea del CSV
                if ($primera_linea) {
                    $primera_linea = !$primera_linea;
                    continue;
                }

                $csv_data = new App\Horario();
                $csv_data->modulo_id = $data[1];
                $csv_data->tramo_horario_id = $data[2];
                $csv_data->save ();
            }
            fclose($handle);
        }

        // Imparte
        /*
        if (($handle = fopen ( $ruta . '/impartes.csv', 'r' )) !== FALSE) {
            $primera_linea = true;
            while (($data = fgetcsv($handle, ',')) !== FALSE) {
                // Me salto la primera linea del CSV
                if ($primera_linea) {
                    $primera_linea = !$primera_linea;
                    continue;
                }

                $csv_data = new App\Imparte();
                $csv_data->linkable_id = $data[3];
                $csv_data->linkable_type = $data[4];
                $csv_data->save ();
            }
            fclose($handle);
        }
        */

        // Interfaces
        if (($handle = fopen ( $ruta . '/interfazs.csv', 'r' )) !== FALSE) {
            $primera_linea = true;
            while (($data = fgetcsv($handle, ',')) !== FALSE) {
                // Me salto la primera linea del CSV
                if ($primera_linea) {
                    $primera_linea = !$primera_linea;
                    continue;
                }

                $csv_data = new App\Interfaz();
                $csv_data->localizacion = $data[0];
                $csv_data->texto = $data[1];
                $csv_data->save ();
            }
            fclose($handle);
        }

        // Links
        if (($handle = fopen ( $ruta . '/links.csv', 'r' )) !== FALSE) {
            $primera_linea = true;
            while (($data = fgetcsv($handle, ',')) !== FALSE) {
                // Me salto la primera linea del CSV
                if ($primera_linea) {
                    $primera_linea = !$primera_linea;
                    continue;
                }

                $csv_data = new App\Link();
                $csv_data->link = $data[1];
                $csv_data->texto_visible = $data[2];
                $csv_data->linkable_id = $data[3];
                $csv_data->linkable_type = $data[4];
                $csv_data->save ();
            }
            fclose($handle);
        }

        // Miembros
        if (($handle = fopen ( $ruta . '/miembros.csv', 'r' )) !== FALSE) {
            $primera_linea = true;
            while (($data = fgetcsv($handle, ',')) !== FALSE) {
                // Me salto la primera linea del CSV
                if ($primera_linea) {
                    $primera_linea = !$primera_linea;
                    continue;
                }

                $csv_data = new App\User();
                $csv_data->nombre = $data[1];
                $csv_data->apellidos = $data[2];
                $csv_data->telefono = $data[3];
                $csv_data->email = $data[4];
                $csv_data->url = $data[5];
                $csv_data->password = password_hash($data[6], PASSWORD_DEFAULT);
                $csv_data->codigo = $data[7];
                $csv_data->admin = $data[8];
                $csv_data->jefe_dept = $data[9];
                $csv_data->mostrar_telefono = $data[10];
                $csv_data->mostrar_email = $data[11];
                $csv_data->mostrar_url = $data[12];
                $csv_data->foto = $data[13];
                $csv_data->descripcion = $data[14];
                $csv_data->isAdmin = $data[15];
                $csv_data->save ();
            }
            fclose($handle);
        }

        // Modulos
        if (($handle = fopen ( $ruta . '/modulos.csv', 'r' )) !== FALSE) {
            $primera_linea = true;
            while (($data = fgetcsv($handle, ',')) !== FALSE) {
                // Me salto la primera linea del CSV
                if ($primera_linea) {
                    $primera_linea = !$primera_linea;
                    continue;
                }

                $csv_data = new App\Modulo();
                $csv_data->nombre = $data[1];
                $csv_data->siglas = $data[2];
                $csv_data->num_horas = $data[3];
                $csv_data->codigo = $data[4];
                $csv_data->curso_id = $data[5];
                $csv_data->save ();
            }
            fclose($handle);
        }

        // Tramos Horarios
        if (($handle = fopen ( $ruta . '/tramo_horarios.csv', 'r' )) !== FALSE) {
            $primera_linea = true;
            while (($data = fgetcsv($handle, ',')) !== FALSE) {
                // Me salto la primera linea del CSV
                if ($primera_linea) {
                    $primera_linea = !$primera_linea;
                    continue;
                }

                $csv_data = new App\TramoHorario();
                $csv_data->dia = $data[1];
                $csv_data->hora = $data[2];
                $csv_data->inicio = $data[3];
                $csv_data->fin = $data[4];
                $csv_data->texto = $data[5];
                $csv_data->save ();
            }
            fclose($handle);
        }

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->vaciarTablas();
    }

    private function vaciarTablas() {
        Schema::disableForeignKeyConstraints();

        foreach($this->tables as $table) {
            DB::table($table)->truncate();
        }

        Schema::enableForeignKeyConstraints();
    }
}
