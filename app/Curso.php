<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function ciclo() {
        return $this->belongsTo('App\Ciclo');
    }

    public function miembros() {
        return $this->hasMany('App\User');
    }

    public function modulos() {
        return $this->hasMany('App\Modulo');
    }
}
