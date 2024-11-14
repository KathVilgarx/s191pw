<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clienteSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('cliente')->insert([
            [
                'nombre'=>'Athanasia',
                'apellido'=>'DayObelia',
                'correo'=>'Athy@gmail.com',
                'telefono'=>'1234567890'
            ],
            [
                'nombre'=>'Lucas',
                'apellido'=>'Wizard',
                'correo'=>'Wizardtower@gmail.com',
                'telefono'=>'1234512345'
            ],
            [
                'nombre'=>'Claude',
                'apellido'=>'Obelia',
                'correo'=>'Claude@gmail.com',
                'telefono'=>'1234561234'
            ]]);
    }
}
