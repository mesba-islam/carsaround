<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuyersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('buyers', function (Blueprint $table) {
            $table->id();

            // Start
            // $table->string('customer_type');
            $table->string('vechicle_link');

            // Personal details
            $table->string('full_name');
            $table->string('driver_license_no');
            $table->string('per_current_address');
            $table->string('state_teritory');
            $table->date('birth_date');
            $table->date('driver_license_expiry');

            // Manual info
            $table->string('manual_veh');
            $table->string('manual_make');
            $table->string('manual_odometer');
            $table->string('manual_model');
            $table->string('manual_regi');
            $table->string('manual_year');
            $table->string('manual_state');
            $table->string('manual_seller_n');
            $table->string('manual_seller_email');
            $table->string('manual_seller_contact');

            // Send OTP
            $table->string('otp_contact_number');
            $table->string('otp_email');

            // Verify OTP
            $table->string('otp_verify_code');

            // Safe Settlement
            $table->string('buyer_safe_amount');
            $table->string('buyer_safe_fees');


            // Inspection
            $table->string('vehicle_type');
            $table->string('boat_size');
            $table->string('engine_type');
            $table->string('add_ons');
            $table->string('boat_type');
            $table->string('fuel_type');
            $table->string('caravan_inspection');


            // Finance
            $table->string('borrow_amount');
            $table->string('current_address');
            $table->string('employment_status');
            $table->string('residency_status');
            $table->string('credit_score');




            // Transport
            $table->string('drop_address');
            $table->string('transport_service');
            $table->string('require_service');




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
        Schema::dropIfExists('buyers');
    }
}
