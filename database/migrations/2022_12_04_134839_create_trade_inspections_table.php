<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_inspections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trade_id');
            $table->enum( 'require_pre_purchase_inspection', ['yes','no'])->default('no')->nullable();
            $table->enum( 'vehicle_type', ['car','boat','bike','caravan']);
            $table->float('service_charge', 10, 2);
            $table->enum( 'boat_size', ['6-meters','6-8-meters','8-10-meters','10-meters'])->nullable();
            $table->enum( 'boat_engine', ['single-outboard','single-inboard','twin-outboards','twin-inboars','twin_inboards','engine-not-sure'])->nullable();
            $table->enum( 'boat_ad_ons', ['do-not-trailer','single-axle','dual-axle','triple-axle','add-ons-not-sure'])->nullable();
            $table->enum( 'boat_type', ['pwc','bowrider','cabin-cruiser','catamaran','centre-console','cuddy-cabin','dinghy','fishing','pontoon','runabout','ski','yacht','other','boat-type-not-sure'])->nullable();
            $table->enum( 'boat_fuel_type', ['petrol','diesel','other-fuel','not-sure-fuel'])->nullable();
            $table->enum( 'will_boat_trailer_inspect', ['yes','no'])->nullable();
            $table->enum( 'caravan_type', ['camper-tent-trailer','pop-top','rv/motorhome','caravan-not-sure'])->nullable();
            $table->tinyText('location')->nullable();
            $table->unsignedBigInteger('inspector_id')->nullable();
            $table->enum( 'status', ['applied','both_parties_agreed','inspector_assigned','date_of_inspection_finalized','generating_inspection_report','inspection_completed'])->default('applied');
            $table->enum( 'payment_status', ['service charge paid','service charge not paid'])->default('service charge not paid');
            $table->enum( 'who_will_pay', ['buyer','seller'])->default('buyer')->nullable();
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
        Schema::dropIfExists('trade_inspections');
    }
}
