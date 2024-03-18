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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('idAccounts'); // Déclare une colonne auto-incrémentée idAccounts comme clé primaire
            $table->integer('creditcard')->nullable(false);
            $table->integer('balance')->nullable(false);
            $table->integer('livretA')->nullable(false);
            $table->integer('livretJ')->nullable(false);
            $table->integer('ammountA')->nullable(false);
            $table->integer('ammountJ')->nullable(false);
            $table->unsignedBigInteger('idTransactions')->nullable(false); // Déclare la colonne idTransactions comme clé étrangère
            $table->unsignedBigInteger('idUsers')->nullable(false); // Déclare la colonne idUsers comme clé étrangère

            $table->foreign('idTransactions')->references('id')->on('transactions'); // Déclare la contrainte de clé étrangère pour idTransactions
            $table->foreign('idUsers')->references('id')->on('users'); // Déclare la contrainte de clé étrangère pour idUsers

            // Ajoutez d'autres colonnes au besoin

            // Ne déclarez pas de clé primaire ici car idAccounts est déjà défini comme clé primaire avec la méthode id()
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('failed_jobs');
    }
};
