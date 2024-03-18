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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('idAccounts')->primary();
            $table->foreign('idTransactions')->references('id')->on('transactions');
            $table->integer('creditcard');
            $table->integer('balance');
            $table->foreign('idUsers')->references('id')->on('users');
            $table->integer('livretA');
            $table->integer('livertJ');
            $table->integer('ammountA');
            $table->integer('ammountJ');
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
