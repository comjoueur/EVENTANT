<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function CrearEvento()
    {
        $materiales = DB::table('materiales')->pluck('nombre','id_mat');
        return view('page.crearEvento',['materiales' => $materiales]);
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
          $input = $request->input;
          $nombre = $request->input('nombre');
          $lugar = $request->input('lugar');
          $fecha = $request->input('fecha');
          $hora = $request->input('hora');
          DB::table('eventos')->insert(
            ['id_evento' => NULL,
            'nombre' => $nombre,
            'lugar' => $lugar,
            'fecha' => $fecha,
            'hora' => $hora]
           );
           
           return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function show(Evento $evento)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $evento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $evento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evento  $evento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evento $evento)
    {
        //
    }
}
