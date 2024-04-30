<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $primaryKey = 'Passaport_client';
    protected $fillable = [
	'Passaport_client','Nom', 'Cognoms', 'Edat', 'Telefon', 'Adressa',
	'Ciutat', 'Pais', 'Email', 'Tipus_targeta', 'Numero_targeta'
];

}
