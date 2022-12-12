<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_features', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('model_id');
            $table->string('aircondition');
            $table->string('child_seat');
            $table->string('gps');
            $table->string('luggage');
            $table->string('music');
            $table->string('seat_belt');
            $table->string('sleeping_bag');
            $table->string('watter');
            $table->string('bluetooth');
            $table->string('on_board_computer');
            $table->string('audio_input');
            $table->string('car_kit');
            $table->string('remote_control_locking');
            $table->string('climate_control');
            $table->string('long_term_trips');
            $table->timestamps();
            $table->foreign('model_id')
                ->references('id')
                ->on('car_models')
                ->onDeleted('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_features');
    }
};
