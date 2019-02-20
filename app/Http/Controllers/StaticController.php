<?php

namespace App\Http\Controllers;

use App\User as Miembro;
use App\Ciclo;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function getIndex() {
        return view('static.index');
    }

    public function prueba() {
        return view('static.test')->withDatos(\App\Interfaz::first());
    }
}
