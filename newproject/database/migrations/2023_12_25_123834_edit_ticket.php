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
        Schema::table("bookings", function (Blueprint $table) {
            $table->foreign("coustemer-id")->references("id")->on("coustmers")->onDelete('cascade');
            $table->foreign("company-id")->references("id")->on("companies")->onDelete('cascade');
            $table->foreign("ticket-id")->references("id")->on("tickets")->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropForeign(['coustemer-id']);
            $table->dropForeign(['company-id']);
            $table->dropForeign(['ticket-id']);
        });
    }
};
