<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // Remplace id('idUsers')
            $table->string('login')->nullable(false);
            $table->string('name')->nullable();
            $table->string('firstName')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('role')->nullable(false);
            $table->dateTime('birthdate')->nullable();
            $table->string('password')->nullable();
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->string('numCarte')->nullable(); // Change integer en string
    
            // Ajouter les colonnes manquantes
            $table->string('nom')->nullable();
            $table->string('numero_carte')->nullable();
            $table->dateTime('date_solde')->nullable();
            $table->string('facilite_caisse')->nullable();
            $table->string('montant')->nullable();
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
