<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsencesTable extends Migration
{
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('id_salarie');
            
            $table->date('date');
            $table->enum('status', ['present', 'absent']);
            $table->boolean('conge_medical')->default(false);
            $table->integer('heures_supplementaires')->nullable();
            $table->timestamps();
        }, ['ifNotExists' => true]);;
    }

    public function down()
    {
        Schema::dropIfExists('absences');
    }
}
