<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //importacion QueryBuilder
use Carbon\Carbon;  //Con esta libreria se vera la hora y fecha del servidor
use App\Http\Requests\validadorCliente;


class clienteController extends Controller
{
    public function home(){
        return view('inicio');
    }

    public function index()
    {
        $consultaClientes= DB::table('cliente')->get();
        return view('clientes', compact('consultaClientes'));
    }

    //Sirve para abrir el formulario
    public function create()
    {
        return view('formulario');
    }

    
    public function store(ValidadorCliente $request)
    {
        DB::table('cliente')->insert([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);

        $usuario= $request->input('txtnombre');
        session()->flash('Exito', 'Se guardo al usuario '.$usuario);

        return to_route('rutacacas');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cliente= DB::table('cliente')->where ('id', $id)->first();
        return view('editarCliente', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(validadorCliente $request, string $id)
    {
        DB::table('cliente')->where('id',$id)->update([
            "nombre"=>$request->input('txtnombre'),
            "apellido"=>$request->input('txtapellido'),
            "correo"=>$request->input('txtcorreo'),
            "telefono"=>$request->input('txttelefono'),
            "updated_at"=>Carbon::now(),
        ]);

        $usuario= $request->input('txtnombre');
        return redirect()->route('rutaconsulta')->with('success','Se actualizo 
        correctamente al cliente '. $usuario);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('cliente')-> where('id', $id)-> delete();
        return redirect()->route('rutaconsulta')->with('success','Se borro 
        correctamente al cliente');

    }
}
