<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCliente;
use App\Http\Controllers\ControladorVuelo;
use App\Http\Controllers\ControladorReserva;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;
use App\Models\Cliente;
use App\Models\Vuelo;
use App\Models\Reserva;
//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function (){
	return view('inici');
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('/dashboard-basic', function(){
		return view('dashboard-basic');
	})->name('dashboard-basic');

//	Route::get('clientes/index_basic', 'ControladorCliente@index_basic')->name('clientes.index_basic');
	Route::get('clientes/index_basic', [ControladorCliente::class, 'index_basic'])->name('clientes.index_basic');
//	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');	
	Route::get('/dashboard', function (){
		return view('dashboard');
	})->name('dashboard');
        Route::get('/clientes/{Passaport_client}/pdfC', function ($Passaport_client){
                $clientes = App\Models\Cliente::findOrFail($Passaport_client);
//	        $cliente = App\Models\Cliente::where('Passaport_client', $Passaport_client)->firstOrFail();

                $pdf = new Dompdf();
                $pdf->loadHtml(View::make('pdfC', compact('clientes'))->render());
                $pdf->setPaper('A4', 'portrait');
                $pdf->render();

                return $pdf->stream('cliente.pdf');
        });

	Route::get('/vuelos/{Codi_unic}/pdf', function ($Codi_unic){
		$vuelo = App\Models\Vuelo::findOrFail($Codi_unic);
		
		$pdf = new Dompdf();
		$pdf->loadHtml(View::make('pdfR', compact('vuelo'))->render());
		$pdf->SetPaper('A4', 'portrait');
		$pdf->render();

		return $pdf->stream('vuelo.pdf');
	});   
	Route::get('/reservas/{Passaport_client}/{Codi_unic}/pdf', function ($Passaport_client, $Codi_unic) {
		$reserva = App\Models\Reserva::where('Codi_unic', $Codi_unic)
                                   ->where('Passaport_client', $Passaport_client)
                                   ->firstOrFail();
	
		$pdf = new Dompdf();
		$pdf->loadHtml(View::make('pdfR',compact('reserva'))->render());
		$pdf->SetPaper('A4', 'portrait');
		$pdf->render();

		return $pdf->stream('reserva.pdf');
	});
	Route::resource('clientes', ControladorCliente::class);
	Route::resource('vuelos', ControladorVuelo::class);
	Route::resource('reservas', ControladorReserva::class);
//	Route::delete('/reservas/{Passaport_client}/{Codi_unic}', 'ReservaController@destroy')->name('reservas.destroy');
	Route::view('/header', 'header')->name('header');
});


//Route::resource('clientes', ControladorCliente::class);

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::post('/noureg', function(){
	$dades=array("Passaport_client"=>"1","Codi_unic"=>"01A0","Localitzador"=>"E30",
		"Numero_seient"=>"30", "Equipatge_ma"=>true, "Equipatge_cabina"=>true,"Quantitat_equipatge_facturat_20kg"=>"0",
		"Tipus_assegurança"=>"Sense franquicia","Preu_vol"=>"20.50","Tipus_checking"=>"On-line");

Reserva::create($dades);
});
Route::get('/mostrareg', function () {
	$Codi_unic="01A0";
	$dades=Reserva::where("Codi_unic","=",$Codi_unic)->first();
	echo $dades["Passaport_client"]."\n";
});
/*
Route::delete('/delreg', function(){
        $Passaport_client="H392L";
	Cliente::where("Passaport_client","=",$Passaport_client)->delete();

});
*/
