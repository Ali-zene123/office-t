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
            $table->foreign("coustemer_id")->references("id")->on("coustmers")->onDelete('cascade');
            $table->foreign("company_id")->references("id")->on("companies")->onDelete('cascade');
            $table->foreign("ticket_id")->references("id")->on("tickets")->onDelete('cascade');
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
