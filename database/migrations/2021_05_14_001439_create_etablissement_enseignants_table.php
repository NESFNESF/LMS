<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement_enseignants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idE');
            $table->unsignedBigInteger('idEn');

            $table->timestamps();

            $table->foreign('idE')->references('id')->on('etablissements');
            $table->foreign('idEn')->references('id')->on('enseignants');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etablissement_enseignants');
    }
}
