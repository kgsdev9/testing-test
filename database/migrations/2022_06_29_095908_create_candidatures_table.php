<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        /**
         *   private $nom ;





         */
        Schema::create('candidatures', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('nationnalite');
            $table->string('date_de_naissance');
            $table->string('lieu_de_naissance');
            $table->string('examen');
            $table->string('statut');
            $table->string('filiere');
            $table->string('ecole_d_origine');
            $table->string('serie_du_bac');
            $table->string('matricule')->nullable();
            $table->integer('points_au_bac');
            $table->string('mention');
            $table->string('centre_de_composition');
            $table->string('numero_de_table');
            $table->string('ville');
            $table->string('telephone_1')->nullable();
            $table->string('telephone_2')->nullable();
            $table->string('email')->nullable();
            $table->string('photo')->nullable();
            $table->enum('etat', ['encours' , 'rejet' , 'valide'])->default('encours');
            $table->unsignedBigInteger('user_id');
            $table->string('id_permanent')->default('ROOS457766')->nullable();
            $table->string('numero_bts')->default('BTS20220455677')->nullable();
            $table->string('resultat')->default('encours')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->OnDelete('cascade')->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidatures');
    }
}
