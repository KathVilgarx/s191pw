<?php

//php artisan make:component [nombre del componente]
//Aqui va la logica del componente
namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    //Se declaran las variables necesarias para el conponente 
    public $tipo;

    //Aqui en el constructor colocamos la variable en los parentesis
    public function __construct($tipo)
    {
        $this->tipo= $tipo;
    }

    
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
