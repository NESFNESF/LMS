<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseEtudiantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_etudiants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idC');
            $table->unsignedBigInteger('idEd');
            $table->timestamps();

            $table->foreign('idC')->references('id')->on('classes');
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
        Schema::dropIfExists('classe_etudiants');
    }
}
