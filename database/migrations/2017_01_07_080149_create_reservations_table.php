<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');

            $table->timestamp('rsv_start');
            $table->timestamp('rsv_end');
            $table->binary('is_hold');
            $table->binary('is_template');
            $table->integer('rsv_user_id',4);
            $table->string('rsv_user_nm',10);
            $table->string('comment',1000);

            $table->integer('created_id',4);
            $table->integer('modified_id',4);
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
        Schema::dropIfExists('reservations');
    }
}
