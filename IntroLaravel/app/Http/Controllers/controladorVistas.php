<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorCliente;

class controladorVistas extends Controller
{
    

    public function insert(){
        return view('formulario');
    }

    public function select(){
        
    }

    public function procesarCliente(validadorCliente $peticion){
        //redireccion enviando msj en session
        $usuario= $peticion->input('txtnombre');
        session()->flash('Exito', 'Se guardo al usuario '.$usuario);

        return to_route('rutacacas');
    }
}
