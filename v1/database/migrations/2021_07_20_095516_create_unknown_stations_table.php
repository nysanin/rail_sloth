<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnknownStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unknown_objects', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('data_source_id')->unsigned();
            $table->enum('object_type', \App\Models\UnknownObject::Types);
            $table->string('identifier');
            $table->timestamps();
            $table->foreign('data_source_id')->on('data_sources')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unknown_stations');
    }
}
