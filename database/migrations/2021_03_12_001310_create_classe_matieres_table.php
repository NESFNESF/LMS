<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseMatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_matieres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idC');
            $table->unsignedBigInteger('idM');
            $table->timestamps();

            $table->foreign('idC')->references('id')->on('classes');
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
        Schema::dropIfExists('classe_matieres');
    }
}
