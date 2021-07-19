<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTripStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_trip_stations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('train_trip_id')->unsigned();
            $table->bigInteger('station_id')->unsigned();
            $table->dateTime('planned_arrival_at')->nullable();
            $table->dateTime('real_arrival_at')->nullable();
            $table->dateTime('planned_departure_at')->nullable();
            $table->dateTime('real_departure_at')->nullable();
            $table->integer('delay')->unsigned()->default(0);
            $table->string('platform', 10);
            $table->string('track', 10);
            $table->foreign('train_trip_id')->references('id')->on('train_trips');
            $table->foreign('station_id')->references('id')->on('stations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_trip_stations');
    }
}
