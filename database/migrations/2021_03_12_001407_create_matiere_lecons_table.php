<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatiereLeconsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matiere_lecons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idM');
            $table->unsignedBigInteger('idL');
            $table->timestamps();

            $table->foreign('idM')->references('id')->on('matieres');
            $table->foreign('idL')->references('id')->on('lecons');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matiere_lecons');
    }
}
