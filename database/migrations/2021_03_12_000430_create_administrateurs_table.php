<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrateurs', function (Blueprint $table) {
            $table->id();
            $table->String('nom');
            $table->String('prenom');
            $table->date('date_de_naissance');
            $table->String('tel');
            $table->String('email');
            $table->Integer('type_user');
            $table->bigInteger('idE')->unsigned();
            $table->String('login');
            $table->String('password');
            $table->String('photo');
            $table->timestamps();

            $table->foreign('idE')->references('id')->on('etablissements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('administrateurs');
    }
}
