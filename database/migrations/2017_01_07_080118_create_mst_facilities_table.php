<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMstFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_facilities', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('facility_id',4);
            $table->string('name',50);
            $table->integer('facility_cd',4);
            $table->string('image_path',200);
            $table->string('image_thumbnail_path',200);

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
        Schema::dropIfExists('mst_facilities');
    }
}
