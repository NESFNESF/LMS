<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtablissementClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etablissement_classes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idE');
            $table->unsignedBigInteger('idC');
            $table->timestamps();

            $table->foreign('idE')->references('id')->on('etablissements');
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
        Schema::dropIfExists('etablissement_classes');
    }
}
