<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $titulo;
    public $texto;
    public $input;
    public $ruta;
    public $resultado;

    public function __construct($titulo, $texto, $input, $ruta, $resultado){
        $this->titulo= $titulo;
        $this->texto= $texto;
        $this->input= $input;
        $this->ruta= $ruta;
        $this->resultado= $resultado;
    }

    public function render(){
        return view('components.card');
    }
}
