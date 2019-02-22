<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TramoHorario extends Model
{
    public function modulos() {
        return $this->belongsToMany('App\Modulo', 'horarios', 'tramo_horario_id', 'modulo_id');
    }

}
