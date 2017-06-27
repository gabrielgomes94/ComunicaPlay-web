<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['quiz', 'drag&drop']);
            $table->string('statement');
            $table->string('explanation')->nullable();
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
        Schema::dropIfExists('users_answers');
        Schema::dropIfExists('answers');
        Schema::dropIfExists('questions');
    }
}
