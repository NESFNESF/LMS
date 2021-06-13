<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement_etudiants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idE');
            $table->unsignedBigInteger('idEd');
            $table->timestamps();

            $table->foreign('idE')->references('id')->on('etablissements');
            $table->foreign('idEd')->references('id')->on('etudiants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissement_etudiants');
    }
}
