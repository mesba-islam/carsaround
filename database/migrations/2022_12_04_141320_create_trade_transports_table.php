<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeTransportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_transports', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trade_id');
            $table->tinyText('pick_up_location')->nullable();
            $table->tinyText('drop_off_location');
            $table->enum('status', ['applied','transport_team_assigned','transport_company_received_the_vehicle','vehicle_on_the_way_to_nearby_depo','vehicle_in_the_nearby_depo','buyer_received_the_vehicle'])->default('applied');
            $table->enum('type_of_service', ['drop-door','nearby-depo'])->default('drop-door');
            $table->enum('special_service', ['general','enclosed','good-car','guaranteed-delivery'])->default('general');
            $table->enum('payment_status', ['service_charge_paid','service_charge_not_paid'])->default('service_charge_not_paid');
            $table->float('service_charge', 10, 2)->default(0);
            $table->enum('who_will_pay', ['buyer','seller'])->default('buyer')->nullable();
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
        Schema::dropIfExists('trade_transports');
    }
}
