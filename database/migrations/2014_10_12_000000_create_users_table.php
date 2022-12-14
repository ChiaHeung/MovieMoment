<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->char('gender',1)->default('M');
            $table->string('phone');
            $table->date('date')->nullable;
            $table->boolean('is_admin')->default('0');
            $table->string('password');
            $table->integer('points')->default('0');
            $table->integer('dailyLimit')->default('0');
            $table->integer('status')->default('1');
            $table->string('userAvatar')->default('user.jpg');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
