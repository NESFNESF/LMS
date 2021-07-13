<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrerequiqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prerequiqs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idL');
            $table->String('question');
            $table->string('qcm1');
            $table->string('qcm2');
            $table->string('qcm3');
            $table->String('reponse');
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
        Schema::dropIfExists('prerequiqs');
    }
}
