<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorLibro;


class ControladorVistas extends Controller
{
    public function inicio(){
        return view('inicio');
    }

    public function registrolibro(){
        return view('registrolibro');
    }

    public function validarlibro(validadorLibro $peticion){
        $titulo= $peticion->input('txttitulo');
        session()->flash('exito','Todo correcto: libro '.$titulo.' guardado.');

        return redirect()->back();
    }
}
