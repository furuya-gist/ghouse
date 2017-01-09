<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login_id',10);
            $table->string('password_hash',60);

            $table->string('name',10);
            $table->string('tel',10);
            $table->integer('lock_count');
            $table->string('email',100);
            $table->integer('role');
            $table->integer('created_id');
            $table->integer('modified_id');
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
        Schema::drop('mst_users');
    }
}
