<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ControladorCliente extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos_clientes = Cliente::all();
	return view('lista', compact('datos_clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('crea');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoCliente = $request->validate([
		'Passaport_client' => 'required',
		'Nom' => 'required',
                'Cognoms' => 'required',
                'Edat' => 'required',
                'Telefon' => 'required',
                'Adressa' => 'required',
                'Ciutat' => 'required',
                'Pais' => 'required',
                'Email' => 'required',
                'Tipus_targeta' => 'required',
                'Numero_targeta' => 'required'
	]);
	$cliente = Cliente::create($nuevoCliente);
	return view('dashboard');
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
    public function edit(string $Passaport_client)
    {
        $datos_cliente = Cliente::findOrFail($Passaport_client);
	return view('actualitza', compact('datos_cliente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Passaport_client)
    {
        $nuevos_datos_cliente = $request->validate([
                'Passaport_client' => 'required',
                'Nom' => 'required',
                'Cognoms' => 'required',
                'Edat' => 'required',
                'Telefon' => 'required',
                'Adressa' => 'required',
                'Ciutat' => 'required',
                'Pais' => 'required',
                'Email' => 'required',
                'Tipus_targeta' => 'required',
                'Numero_targeta' => 'required'
	]);
	Cliente::findorFail($Passaport_client)->update($nuevos_datos_cliente);
	return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Passaport_client)
    {
	$cliente = Cliente::findOrFail($Passaport_client)->delete();
	return view('dashboard');
    }
        public function index_basic()
    {
        $datos_clientes = Cliente::all();
        return view('lista-basica', compact('datos_clientes'));
    }
}
