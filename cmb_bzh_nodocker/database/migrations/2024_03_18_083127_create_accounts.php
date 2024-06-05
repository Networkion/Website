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
            $table->integer('idUser')->nullable(false);

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
