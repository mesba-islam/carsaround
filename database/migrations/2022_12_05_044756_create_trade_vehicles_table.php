<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trade_id');
            $table->string('type', 20);
            $table->string('make', 200);
            $table->string('model', 100);
            $table->string('year', 20);
            $table->string('odometer', 50)->nullable();
            $table->string('registration_number', 50)->nullable();
            $table->string('registered_state', 100)->nullable();
            $table->float('price', 10, 2)->unsigned();
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
        Schema::dropIfExists('trade_vehicles');
    }
}
