<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeSafeSettlementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('trade_safe_settlements', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trade_id');
            $table->float('price', 10, 2)->default(0);
            $table->float('service_charge', 10, 2)->default(0);
            $table->enum( 'status', ['applied','both_parties_agreed','carsaround_received_the_money','vehicle_ready_to_be_dispatched','vehicle_has_been_received','seller_received_the_money'])->default('applied');
            $table->enum('payment_status', ['paid','unpaid'])->default('unpaid');
            $table->enum('who_will_pay', ['buyer','seller'])->nullable()->default('buyer');
            $table->timestamps();
            $table->foreign('trade_id')->references('id')->on('trades')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('safe_settlements');
    }
}
