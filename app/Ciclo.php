<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    public function links() {
        return $this->morphMany('App\Link', 'linkable');
    }

    public function cursos() {
        return $this->hasMany('App\Curso');
    }
}
