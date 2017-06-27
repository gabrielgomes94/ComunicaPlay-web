<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouletteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roulettes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('position');
            $table->integer('stage_id')->unsigned();
            $table->foreign('stage_id')->references('id')->on('stages');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_roulettes_results');
        Schema::dropIfExists('roulettes_results');
        Schema::dropIfExists('roulettes');
    }
}
