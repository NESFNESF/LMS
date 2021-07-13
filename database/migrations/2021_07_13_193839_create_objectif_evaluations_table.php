<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjectifEvaluationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectif_evaluations', function (Blueprint $table) {
          $table->id();
            $table->unsignedBigInteger('idL');
            $table->String('description');
            $table->timestamps();

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
        Schema::dropIfExists('objectif_evaluations');
    }
}
