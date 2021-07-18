<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('number');
            $table->bigInteger('starting_station_id')->unsigned();
            $table->bigInteger('final_station_id')->unsigned();
            $table->text('description');
            $table->date('from')->nullable();
            $table->softDeletes();
            $table->foreign('starting_station_id', 'trains_starting')->on('stations')->references('id');
            $table->foreign('final_station_id', 'trains_final')      ->on('stations')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
