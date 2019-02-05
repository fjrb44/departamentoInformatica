<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    public function miembros() {
        return $this->belongsToMany('App\Miembro', 'impartes');
    }

    public function tramos_horarios() {
        return $this->belongsToMany('App\TramoHorario', 'horarios');
    }
}
