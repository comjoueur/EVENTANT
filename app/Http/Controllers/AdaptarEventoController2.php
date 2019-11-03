<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdaptarEventoController2 extends Controller
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
        $evento = $request->eventos;
        $id_evento = $evento[0];
        $nombre = DB::table('eventos')->select('nombre')->where('id_evento',$id_evento)->first()->nombre;
        $lugar = DB::table('eventos')->select('lugar')->where('id_evento', $id_evento)->first()->lugar;
        $fecha = DB::table('eventos')->select('fecha')->where('id_evento', $id_evento)->first()->fecha;
        $hora = DB::table('eventos')->select('hora')->where('id_evento', $id_evento)->first()->hora;

        return view('page.adaptarEvento2', ['nombre' => $nombre, 'lugar' => $lugar, 'fecha' => $fecha, 'hora' => $hora, 'id_evento' => $id_evento]);
    }

    public function saving(Request $request){
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
        //
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
