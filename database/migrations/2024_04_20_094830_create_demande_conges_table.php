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
        

        Schema::create('demande_conges', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_salarie');
           
            $table->date('date_debut');
            $table->date('date_fin');
            $table->integer('jours_demandes');
            $table->string('statut');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demande_conges');
    }
};
