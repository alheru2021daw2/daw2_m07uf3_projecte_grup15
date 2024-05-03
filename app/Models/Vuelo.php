<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vuelo extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $incrementing = false;
    protected $primaryKey ='Codi_unic';
    protected $fillable = [
	'Codi_unic','Codi_model', 'Ciutat_origen', 'Ciutat_destinacio', 'Terminal_origen', 'Terminal_destinacio',
	'Data_sortida', 'Data_arribada', 'Hora_sortida', 'Hora_arribada', 'Classe'
];
}
