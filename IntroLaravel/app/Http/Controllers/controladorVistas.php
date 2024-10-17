<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorVistas extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function insert(){
        return view('formulario');
    }

    public function select(){
        return view('clientes');
    }

    public function procesarCliente(Request $peticion){
        //Respueta a la peticion post
        //return 'La info del cliente llego al controlador';

        //regresamos todo lo que envia la peticion
        return $peticion->all();

        //Muetra la ip de la peticion
        //return $peticion->ip();

        //muetra la ruta de la peticion
        //return $peticion->path();

        //
        //return $peticion->url();
    }
}
