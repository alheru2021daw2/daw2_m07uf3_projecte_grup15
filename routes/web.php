<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCliente;


//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function (){
	return view('inici');
});

Route::group(['middleware' => 'auth'], function(){
	Route::get('/dashboard', function (){
		return view('dashboard');
	})->name('dashboard');

	Route::resource('clientes', ControladorCliente::class);
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

use App\Models\Cliente;

/*Route::post('/noureg', function(){
//	$dades=array("Passaport_client"=>"H392L","Nom"=>"Alex","Cognoms"=>"Hernandez Ruiz",
		"Edat"=>22, "Telefon"=>666666666, "Adressa"=>"Sta Coloma","Ciutat"=>"Barcelona",
		"Pais"=>"España","Email"=>"01alex.hr@gmail.com","Tipus_targeta"=>"Debit","Numero_targeta"=>303022);

Cliente::create($dades);
});
Route::get('/mostrareg', function () {
	$Passaport_client="H392L";
	$dades=Cliente::where("Passaport_client","=",$Passaport_client)->first();
	echo $dades["Nom"]."\n";
});
Route::delete('/delreg', function(){
        $Passaport_client="H392L";
	Cliente::where("Passaport_client","=",$Passaport_client)->delete();

});
*/
