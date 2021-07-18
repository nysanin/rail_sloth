<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_trains', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('train_id')->unsigned();
            $table->bigInteger('station_id')->unsigned();
            $table->softDeletes();
            $table->foreign('train_id')->on('trains')->references('id');
            $table->foreign('station_id')->on('stations')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_trains');
    }
}
