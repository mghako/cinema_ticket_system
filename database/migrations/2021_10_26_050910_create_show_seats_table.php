<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('show_seats', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('price')->default('3500');
            $table->enum('status', ['free', 'booked','busy'])->default('free');
            $table->foreignId('cinema_seat_id');
            $table->foreignId('show_id');
            $table->foreignId('booking_id')->nullable();
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
        Schema::dropIfExists('show_seats');
    }
}
