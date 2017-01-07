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
        Schema::create('mst_users', function (Blueprint $table) {
            $table->increments('id')->primary();
            $table->string('login_id',10)->unique();
            $table->string('password_hash',60);

            $table->string('name',10);
            $table->string('tel',10);
            $table->integer('lock_count',10);
            $table->string('mail',100)->unique();
            $table->integer('role',4);
            $table->integer('created_id',4);
            $table->integer('modified_id',4);
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
        Schema::drop('users');
    }
}
