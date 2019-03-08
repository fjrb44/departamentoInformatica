<?php

namespace App\Http\Controllers;

use App\User as Miembro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MiembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $miembros = Miembro::all();
        return view('miembros.index')
            ->with(compact('miembros'))
            ->withInterfaz(\App\Interfaz::class);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function show(Miembro $miembro)
    {
        return view('miembros.show')->with(compact('miembro'))->withInterfaz(\App\Interfaz::class);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function edit(Miembro $miembro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Miembro $miembro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miembro $miembro)
    {
        //
    }
}
