<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function home(){
        return view ('inicio');
    }
    
    public function repaso1(){
        return view ('repaso1');
    }

    public function mb_gb(Request $request) {
        $megas = $request->input('input_value');
        $gigas = $megas / 1024;
        return view('repaso1', ['resultado_mb_gb' => $gigas]);
    }
    
    public function gb_mb(Request $request) {
        $gigas = $request->input('input_value');
        $megas = $gigas * 1024;
        return view('repaso1', ['resultado_gb_mb' => $megas]);
    }
    
    public function gb_tb(Request $request) {
        $gigas = $request->input('input_value');
        $teras = $gigas / 1024;
        return view('repaso1', ['resultado_gb_tb' => $teras]);
    }
    
    public function tb_gb(Request $request) {
        $teras = $request->input('input_value');
        $gigas = $teras * 1024;
        return view('repaso1', ['resultado_tb_gb' => $gigas]);
    }
    
    
}
