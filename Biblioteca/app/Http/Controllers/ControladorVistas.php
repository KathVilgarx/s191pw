<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function registrolibro(){
        return view('registrolibro');
    }

    public function validarlibro(validadorLibro $peticion){
        //redireccion enviando msj en session
        $usuario= $peticion->input('txtnombre');
        session()->flash('Exito', 'Se guardo al usuario '.$usuario);

        return to_route('rutacacas');
    }
}
