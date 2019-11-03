<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ModificarPersonalController2 extends Controller
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
        $trabajadores = $request->trabajadores;
        $trabajador = $trabajadores[0];
        $id_evento = DB::table('trabajadores')->select('Eventoid_evento')->first()->Eventoid_evento;
        $eventos = DB::table('eventos')->pluck('nombre','id_evento');
        $tipo = DB::table('trabajadores')->select('tipo')->first()->tipo;
        return view('page.modificarPersonal2',['eventos' => $eventos, 'tipo' => $tipo,'dni' => $trabajador]);
    }

    public function saving(Request $request)
    {
        $eventos = $request->eventos;
        $roles = $request->rol;
        $evento = $eventos[0];
        $rol = $roles[0];
        $dni = $request->dni;
        DB::table('trabajadores')->where('Personadni', $dni)->update(['Eventoid_evento' => $evento, 'tipo' => $rol]);
        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function show(Personal $personal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function edit(Personal $personal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personal $personal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personal  $personal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personal $personal)
    {
        //
    }
}
