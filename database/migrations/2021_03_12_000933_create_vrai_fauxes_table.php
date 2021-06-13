<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVraiFauxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vrai_fauxes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idEv');
            $table->String('question');
            $table->String('reponse');
            $table->timestamps();

            $table->foreign('idEv')->references('id')->on('evaluations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vrai_fauxes');
    }
}
