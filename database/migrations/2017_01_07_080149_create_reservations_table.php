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

            $table->string('title')->default('notitle');
            $table->timestamp('rsv_start')->nullable()->default(null);
            $table->timestamp('rsv_end')->nullable()->default(null);
            $table->boolean('is_hold');//仮予約
            $table->boolean('is_template');//雛形の記事
            $table->integer('rsv_user_id');//予約者
            $table->string('rsv_user_nm',10);
            $table->string('comment',500);

            $table->integer('created_id');
            $table->integer('modified_id');
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
