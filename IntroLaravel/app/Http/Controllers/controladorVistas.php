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
        //regresamos todo lo que envia la peticion
        //return redirect('/');

        //redireccion usando el nombre de ruta
        //return redirect()->route('rutaconsulta');

        //redireccion al origen de la peticion
        //return back();

        //redireccion con valores adjuntos (variables, arreglos, etc...)
        //$id=[['usuario'=>'1'],['usuario'=>'2']];
        //return view('formulario',  compact('id'));

        //redireccion enviando msj en session
        $usuario= $peticion->input('txtnombre');
        session()->flash('Exito', 'Se guardo al usuario '.$usuario);

        return to_route('rutacacas');
    }
}
