<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;
    protected $table = 'reserva';
//    protected $primaryKey = null;
    protected $primaryKey = ['Passaport_client', 'Codi_unic'];  
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = [
    'Passaport_client','Codi_unic', 'Localitzador', 'Numero_seient', 'Equipatge_ma', 'Equipatge_cabina',
    'Quantitat_equipatge_facturat_20kg', 'Tipus_assegurança', 'Preu_vol', 'Tipus_checking'
    ];
	
	protected static function boot()
    {
        parent::boot();

        // Definir la clave primaria compuesta
//        static::creating(function ($model) {
//            $model->primaryKey = [
//                'Passaport_client' => $model->Passaport_client,
//                'Codi_unic' => $model->Codi_unic,
//            ];
	static::saving(function($model){
		$model->primaryKey = null;
        });
    }

    // Sobreescribe el método getKey para devolver un array con los valores de la clave primaria compuesta
    public function getKey()
    {
        return [
            'Passaport_client' => $this->getAttribute('Passaport_client'),
            'Codi_unic' => $this->getAttribute('Codi_unic'),
        ];
    }

}
