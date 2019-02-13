<?php

namespace App\Http\Controllers;

use App\Interfaz;
use Illuminate\Http\Request;

class InterfazController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Interfaz  $interfaz
     * @return \Illuminate\Http\Response
     */
    public function show(Interfaz $interfaz)
    {
        return $interfaz;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interfaz  $interfaz
     * @return \Illuminate\Http\Response
     */
    public function edit(Interfaz $interfaz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Interfaz  $interfaz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Interfaz $interfaz)
    {
        $interfaz->texto = $request->input('texto', 'ERROR');
        $interfaz->save();

        return $interfaz;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Interfaz  $interfaz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interfaz $interfaz)
    {
        //
    }
}
