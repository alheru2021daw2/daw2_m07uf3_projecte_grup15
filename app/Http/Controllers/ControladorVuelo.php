<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vuelo;

class ControladorVuelo extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos_vuelos = Vuelo::all();
	return view('listaVuelos', compact('datos_vuelos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creaVuelos');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevoVuelo = $request->validate([
	'Codi_unic' => 'required',
	'Codi_model' => 'required',
        'Ciutat_origen' => 'required',
        'Ciutat_destinacio' => 'required',
        'Terminal_origen' => 'required',
        'Terminal_destinacio' => 'required',
        'Data_sortida' => 'required',
        'Data_arribada' => 'required',
        'Hora_sortida' => 'required',
        'Hora_arribada' => 'required',
        'Classe' => 'required'
	]);
	$vuelo = Vuelo::create($nuevoVuelo);
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
    public function edit(string $Codi_unic)
    {
        $datos_vuelo = Vuelo::findOrFail($Codi_unic);
	return view('actualitzaVuelos', compact('datos_vuelo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Codi_unic)
    {
        $nuevos_datos_vuelo = $request->validate([
        'Codi_unic' => 'required',
        'Codi_model' => 'required',
        'Ciutat_origen' => 'required',
        'Ciutat_destinacio' => 'required',
        'Terminal_origen' => 'required',
        'Terminal_destinacio' => 'required',
        'Data_sortida' => 'required',
        'Data_arribada' => 'required',
        'Hora_sortida' => 'required',
        'Hora_arribada' => 'required',
        'Classe' => 'required'
	]);
	Vuelo::findOrFail($Codi_unic)->update($nuevos_datos_vuelo);
	return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Codi_unic)
    {
        $vuelo = Vuelo::findOrFail($Codi_unic)->delete();
	return view('dashboard');
    }
    public function mostrar(string $Codi_unic)
    {
	$datos_vuelo = Vuelo::findOrFail($Codi_unic);
	return view('mostrarVuelos', compact('datos_vuelo'));
    }
    public function index_basic()
    {
        $datos_vuelos = Vuelo::all();
        return view('listaVuelos-basica', compact('datos_vuelos'));
    }
}
