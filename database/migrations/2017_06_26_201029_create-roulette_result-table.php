<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRouletteResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roulettes_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('text');
            $table->integer('bonus_time')->default(0);
            $table->integer('bonus_score')->default(0);
            $table->integer('roulette_id')->unsigned();
            $table->foreign('roulette_id')->references('id')->on('roulettes');
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
        Schema::dropIfExists('roulettes_results');
    }
}
