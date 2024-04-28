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
        Schema::create('vuelos', function (Blueprint $table) {
            $table->char('Codi_unic', 6)->primary();
            $table->string('Codi_model');
            $table->string('Ciutat_origen');
            $table->string('Ciutat_destinacio');
            $table->string('Terminal_origen');
            $table->string('Terminal_destinacio');
            $table->date('Data_sortida');
            $table->date('Data_arribada');
            $table->time('Hora_sortida');
            $table->time('Hora_arribada');
            $table->enum('Classe', ['Turista','Bussiness','Primera']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vuelos');
    }
};
