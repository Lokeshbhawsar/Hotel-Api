<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_reviews', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->integer('hotel_id')->nullable();
            $table->text('description')->nullable();
            $table->integer('rating')->default(0)->nullable();
            $table->string('author')->nullable();
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
        Schema::dropIfExists('hotel_reviews');
    }
}
