<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTuteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tuteurs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom_tuteur');
            $table->string('prenom_tuteur');
            $table->integer('telephone_tuteur');
            $table->string('profession_tuteur');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tuteurs');
    }
}
