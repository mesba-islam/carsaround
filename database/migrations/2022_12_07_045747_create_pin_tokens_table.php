<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pin_tokens', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('phone_no', 20)->index();
            $table->string('pin', 10)->index();
            $table->dateTime('expired_at')->index();
            $table->tinyInteger('has_used')->default(0);
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
        Schema::dropIfExists('pin_tokens');
    }
}
