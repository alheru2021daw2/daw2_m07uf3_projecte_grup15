<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reserva;

class ControladorReserva extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datos_reservas = Reserva::all();
	return view('listaReservas', compact('datos_reservas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('creaReservas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nuevaReserva = $request->validate([
	'Passaport_client' => 'required',
	'Codi_unic' =>'required',
	'Localitzador'=>'required',
	'Numero_seient'=>'required',
        'Equipatge_ma'=>'required',
        'Equipatge_cabina'=>'required',
        'Quantitat_equipatge_facturat_20kg'=>'required',
        'Tipus_assegurança'=>'required',
        'Preu_vol'=>'required',
        'Tipus_checking'=>'required'
	]);
	$reserva = Reserva::create($nuevaReserva);
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
        //Reserva::where('Codi_unic', $Codi_unic);
	$datos_reserva = Reserva::where('Codi_unic', $Codi_unic)->firstOrFail();
	return view('actualitzaReserva', compact('datos_reserva'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Codi_unic)
    {
        $nuevos_datos_reserva = $request->validate([
		'Passaport_client'=>'required',
		'Codi_unic'=>'required',
		'Localitzador'=>'required',
                'Numero_seient'=>'required',
                'Equipatge_ma'=>'required',
                'Equipatge_cabina'=>'required',
                'Quantitat_equipatge_facturat_20kg'=>'required',
                'Tipus_assegurança'=>'required',
                'Preu_vol'=>'required',
                'Tipus_checking'=>'required',
	]);
		Reserva::where('Codi_unic', $Codi_unic)->update($nuevos_datos_reserva);
		return view('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $Codi_unic)
    {
	Reserva::where('Codi_unic', $Codi_unic)->delete();
	//$reserva = Reserva::findOrFail($Codi_unic)->delete();
    	//$reserva->delete();
	return view('dashboard');
    }
    public function mostrar($Passaport_client, $Codi_unic)
    {
        $reserva = Reserva::where('Passaport_client', $Passaport_client)
                      ->where('Codi_unic', $Codi_unic)
                      ->first();
        return view('mostrarReservas', compact('reserva'));
    }
        public function index_basic()
    {
        $datos_reservas = Reserva::all();
        return view('listaReservas-basica', compact('datos_reservas'));
    }
}
