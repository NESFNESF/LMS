<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_enseignants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idEn');
            $table->unsignedBigInteger('idM');
            $table->timestamps();

            $table->foreign('idEn')->references('id')->on('enseignants');
            $table->foreign('idM')->references('id')->on('matieres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matiere_enseignants');
    }
}
