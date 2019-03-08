<?php

namespace App\Http\Controllers;

use App\User as Miembro;
use App\Ciclo;
use Illuminate\Http\Request;
// {{ auth()->user()->isAdmin }}

class StaticController extends Controller
{
    public function getIndex() {
        $ciclos = Ciclo::all();

        return view('static.index')
            ->with(compact('ciclos'))
            ->withInterfaz(\App\Interfaz::class);
    }

    public function prueba() {
        return view('static.test')->withDatos(\App\Interfaz::first());
    }
}
