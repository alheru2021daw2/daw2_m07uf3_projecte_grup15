<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->string('Passaport_client');
            $table->foreign('Passaport_client')->references('Passaport_client')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->char('Codi_unic', 6);
            $table->foreign('Codi_unic')->references('Codi_unic')->on('vuelos')->onDelete('cascade')->onUpdate('cascade');
            $table->string('Localitzador')->unique();
            $table->integer('Numero_seient');
            $table->boolean('Equipatge_ma');
            $table->boolean('Equipatge_cabina');
            $table->integer('Quantitat_equipatge_facturat_20kg');
            $table->enum('Tipus_assegurança', ['Franquicia fins a 1000 Euros','Franquicia fins a 500 Euros', 'Sense franquicia']);
            $table->decimal('Preu_vol');
            $table->enum('Tipus_checking', ['On-line','Mostrador','Quiosc']);
            $table->primary(['Passaport_client','Codi_unic']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva');
    }
};
