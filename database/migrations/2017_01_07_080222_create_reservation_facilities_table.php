<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation_facilities', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('reservation_id');
            $table->integer('facility_id');
            $table->integer('reserve_count');

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
        Schema::dropIfExists('reservation_facilities');
    }
}
