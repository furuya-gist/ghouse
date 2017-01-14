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
            $table->string('email')->unique();
            $table->string('password');

//            $table->increments('id');
//            $table->string('login_id',10);
//            $table->string('password',60);

//            $table->string('name',10);
            $table->string('tel',10)->nullable();
            $table->integer('lock_count')->default(0);
//            $table->string('email',100);
            $table->integer('role')->default(0);
            $table->integer('created_id')->nullable();
            $table->integer('modified_id')->nullable();
            $table->rememberToken();
            $table->timestamps();
//            $table->rememberToken();
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
