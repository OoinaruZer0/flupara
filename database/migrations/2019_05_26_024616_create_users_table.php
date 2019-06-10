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
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('lastname_kana');
            $table->string('firstname_kana');
            $table->string('phone');
            $table->string('email');
            $table->string('password');
            $table->string('zip31');
            $table->string('zip32');
            $table->string('pref31');
            $table->string('addr31');
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
