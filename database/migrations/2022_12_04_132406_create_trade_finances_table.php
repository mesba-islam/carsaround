<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_finances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trade_id');
            $table->float('borrow_amount', 10, 2);
            $table->float('approved_amount', 10, 2)->default(0)->nullable();
            $table->float('service_charge', 10, 2)->default(0)->nullable();
            $table->enum( 'residential_status', ['10','8','6','4','3']);
            $table->enum('time_at_current_address', ['10','8','6','4','3']);
            $table->enum('employment_status', ['10','8','6','4','3']);
            $table->enum('residency_status', ['10','7','3']);
            $table->enum('credit_score', ['10','8','5','2']);
            $table->enum('status', ['applied','assessment','pre_approval','final_Approval','contract_Execution','settlement'])->default('applied');
            $table->enum('payment_status', ['service charge paid','service charge not paid'])->default('service charge not paid');
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
        Schema::dropIfExists('trade_finances');
    }
}
