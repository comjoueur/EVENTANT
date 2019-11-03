<?php

namespace App\Http\Controllers;

use App\Personal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgregarPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = DB::table('eventos')->pluck('nombre','id_evento');
        return view('page.agregarPersonal',['eventos' => $eventos]);
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
        $nombre = $request->input('nombre');
        $apellido = $request->input('apellido');
        $dni = $request->input('DNI');
        $cuenta = $request->input('cuenta');
        $contra = $request->input('contra');
        $arrrol = $request->rol;
        $correo = $request->input('email');
        $rol=$arrrol[0];
        $arrevento = $request->eventos;
        $id_evento = $arrevento[0];
        
          DB::table('Personas')->insert(
            ['dni' => $dni,
            'nombre' => $nombre,
            'apellido' => $apellido
            ]
           );

           DB::table('cuentas')->insert(
            ['id_cuenta' => NULL,
            'usuario' => $cuenta,
            'contra' => $contra,
            'correo' => $correo
            ]
           );

           $id_cuenta = DB::table('cuentas')->select('id_cuenta')->where('usuario',$cuenta)->first()->id_cuenta;


           DB::table('trabajadores')->insert(
            ['Personadni' => $dni,
            'Cuentaid_cuenta' => $id_cuenta,
            'Eventoid_evento' => $id_evento,
            'tipo' => $rol
            ]
           );
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
