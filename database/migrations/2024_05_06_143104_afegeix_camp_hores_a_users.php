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
        Schema::table('users', function (Blueprint $table) {
		$table->timestamp('hora_entrada')->nullable();
		$table->timestamp('hora_sortida')->nullable();
	});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
		$table->dropColumn('hora_entrada');
		$table->dropColumn('hora_sortida');
	});
    }
};
