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
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('Passaport_client')->primary();
            $table->string('Nom');
            $table->string('Cognoms');
            $table->integer('Edat');
            $table->integer('Telefon');
            $table->string('Adressa');
            $table->string('Ciutat');
            $table->string('Pais');
            $table->string('Email');
            $table->enum('Tipus_targeta',['Debit','Credit']);
            $table->integer('Numero_targeta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
