<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname')->nullable()->default('Gomes');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('gender', ['male', 'female'])->default('male');
            $table->integer('score')->default(0);
            $table->integer('time')->default(0);
            $table->rememberToken();
            $table->timestamps();
            $table->timestamp('last_login')->nullable();
            $table->enum('type', ['student', 'admin'])->default('admin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::dropIfExists('users');
    }
}
