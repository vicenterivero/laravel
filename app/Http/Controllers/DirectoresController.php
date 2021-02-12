<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DirectorRequest;

class DirectoresController extends Controller
{
    public function create()
    {
        return view('contacto-uno');
    }
    public function store(DirectorRequest $datos)
    {
        /* return "nombre:  ".$datos->input('nombre')." "."Apellido: ".$datos->input('apellidos')." "."Correo: ".$datos->input('correo')." "."Asunto: ".$datos->input('asunto')." "."Achivos: ".$datos->input('archivo'); */

        /*     $datos->foto->store(config('archivos.path'), 'public');
        return view('inicio'); */
        //instancia
        $directores=new \App\Directores;
        $directores->nombre=$datos->nombre;
        $directores->apellidos=$datos->apellidos;
        $directores->email=$datos->email;
        $directores->asunto=$datos->asunto;
        $directores->save();
        return "formulario enviado";

    }
}
