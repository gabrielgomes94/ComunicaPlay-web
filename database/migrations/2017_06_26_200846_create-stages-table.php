<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('quantity_positions')->unsigned();
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
        Schema::dropIfExists('users_answers');
        Schema::dropIfExists('answers');
        Schema::dropIfExists('stages');
    }
}
