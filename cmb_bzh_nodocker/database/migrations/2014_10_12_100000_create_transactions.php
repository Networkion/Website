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
            $table->id('idTransactions')->primary();
            $table->foreign('idUsers')->references('id')->on('users');
            $table->foreign('idCompte')->references('id')->on('accounts');
            $table->dateTime('date');
            $table->string('purpose')->nullable();
            $table->integer('ammount');
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
