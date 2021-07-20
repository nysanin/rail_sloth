<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataSourceTrainTripIdentifiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_source_train_trip_identifiers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('data_source_id')->unsigned();
            $table->bigInteger('train_trip_id')->unsigned();
            $table->string('identifier')->index();
            $table->foreign('data_source_id')->on('data_sources')->references('id');
            $table->foreign('train_trip_id')->on('train_trips')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_source_train_trip_identifiers');
    }
}
