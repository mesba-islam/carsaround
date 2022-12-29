<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_teams', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trade_id');
            $table->string('team_name', 100);
            $table->string('type', 20);
            $table->enum('status', ['active','inactive'])->default('active');
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
        Schema::dropIfExists('trade_teams');
    }
}
