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

    public function links() {
        return $this->morphMany('App\Link', 'linkable');
    }

    public function curso() {
        return $this->belongsTo('App\Curso');
    }
}
