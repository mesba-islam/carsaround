<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeServiceStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_service_statuses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('trade_id');
            $table->string('service', 50);
            $table->string('status', 50);
            $table->unsignedBigInteger('changed_by')->nullable();
            $table->timestamps();

            $table->foreign('trade_id')->on('trades')->references('id')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('changed_by')->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trade_service_statuses');
    }
}
