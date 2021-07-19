<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('train_trips', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('train_id')->unsigned();
            $table->dateTime('started_at');
            $table->dateTime('planned_at');
            $table->dateTime('arrived_at')->nullable();
            $table->dateTime('last_synchro_at')->nullable();
            $table->boolean('delayed')->default(false);
            $table->boolean('cancelled')->default(false);
            $table->text('special_info')->nullable();
            $table->string('timezone', 4)->default('UTC +1');
            $table->foreign('train_id')->references('id')->on('trains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('train_trips');
    }
}
