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
            $table->id('idUsers'); // Déclare une colonne auto-incrémentée idUsers comme clé primaire
            $table->string('login')->nullable(false);
            $table->string('name')->nullable(false);
            $table->string('firstName')->nullable(false);
            $table->string('email')->nullable(false);
            $table->string('role')->nullable(false);
            $table->dateTime('birthdate')->nullable(false);
            $table->string('password')->nullable(false);
            $table->dateTime('created_at')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->integer('numCarte')->nullable();

            // Ajoutez d'autres colonnes au besoin

            // Ne déclarez pas de clé primaire ici car idUsers est déjà défini comme clé primaire avec la méthode id()
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
