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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id('idTransactions'); // Déclare une colonne auto-incrémentée idTransactions comme clé primaire
            $table->dateTime('date')->nullable(false);
            $table->string('purpose')->nullable(true);
            $table->integer('amount')->nullable(false);
            $table->unsignedBigInteger('idUsers')->nullable(false); // Déclare la colonne idUsers comme clé étrangère
            $table->unsignedBigInteger('idAccounts')->nullable(false); // Déclare la colonne idAccounts comme clé étrangère
        
            $table->foreign('idUsers')->references('id')->on('users'); // Déclare la contrainte de clé étrangère pour idUsers
            $table->foreign('idAccounts')->references('id')->on('accounts'); // Déclare la contrainte de clé étrangère pour idAccounts
        
            // Ajoutez d'autres colonnes au besoin
        
            // Ne déclarez pas de clé primaire ici car idTransactions est déjà défini comme clé primaire avec la méthode id()
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_reset_tokens');
    }
};
