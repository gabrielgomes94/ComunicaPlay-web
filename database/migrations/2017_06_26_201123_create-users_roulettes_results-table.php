<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRoulettesResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_roulettes_results', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('roulette_result_id')->unsigned();
            $table->foreign('roulette_result_id')->references('id')->on('roulettes_results');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
    }
}
