<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salaries', function (Blueprint $table) {
            $table->increments('id_salarie');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email');
            $table->string('cin');
            $table->string('num_cnss');
            $table->string('num_amo');
            $table->string('num_cimr');
            $table->string('sex');
            $table->date('DateDeNaissance');
            $table->string('ville');
            $table->string('adresse');
            $table->string('image')->nullable();
            $table->string('situation_familialle');
            $table->integer('nbre_enfant');
            $table->string('departement');
            $table->string('mission');
            $table->date('date_entree');
            $table->double('salaire_initial');
            $table->double('salaire_actuel');
           
            $table->string('password');
            $table->boolean('email_verified')->default(false);
            $table->string('role');
            $table->timestamps();
        });

        

      

        Schema::create('salaires', function (Blueprint $table) {
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

        Schema::create('depences', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_salarie');
            $table->double('montant');
            $table->string('motif');
            $table->date('date');
            $table->timestamps();
            // $table->foreign('id_salarie')
            //         ->references('id')
            //         ->on('salaries')
            //         ->onDelete('cascade');
        });



       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('salaries');
    }
}