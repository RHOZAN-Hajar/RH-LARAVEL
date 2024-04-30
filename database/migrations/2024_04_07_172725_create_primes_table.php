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
        Schema::create('primes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_salarie');
            $table->date('date');
            $table->double('montant');
            $table->timestamps();
            // $table->foreign('id_salarie')
            //         ->references('id')
            //         ->on('salaries')
            //         ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('primes');
    }
};
