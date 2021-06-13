<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement_matieres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idE');
            $table->unsignedBigInteger('idM');
            $table->timestamps();

            $table->foreign('idE')->references('id')->on('etablissements');
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
        Schema::dropIfExists('etablissement_matieres');
    }
}
