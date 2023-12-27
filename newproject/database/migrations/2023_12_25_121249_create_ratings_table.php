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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('hotel-id');
            $table->unsignedBigInteger('coustemer-id');
            $table->unsignedInteger('star');
            $table->string('comment');
            $table->foreign('hotel-id')->references('id')->on('hotels')->onDelete('cascade');
            $table->foreign('coustemer-id')->references('id')->on('coustmers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
};
