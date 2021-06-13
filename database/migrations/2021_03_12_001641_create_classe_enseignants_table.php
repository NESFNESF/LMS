<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseEnseignantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_enseignants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idEn');
            $table->unsignedBigInteger('idC');
            $table->timestamps();

            $table->foreign('idEn')->references('id')->on('enseignants');
            $table->foreign('idC')->references('id')->on('classes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classe_enseignants');
    }
}
