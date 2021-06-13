<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQCMSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('q_c_m_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idEv');
            $table->String('question');
            $table->string('qcm1');
            $table->string('qcm2');
            $table->string('qcm3');
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
        Schema::dropIfExists('q_c_m_s');
    }
}
