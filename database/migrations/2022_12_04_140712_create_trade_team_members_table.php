<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeTeamMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('trade_team_members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trade_team_id');
            $table->unsignedBigInteger('user_id');
            $table->enum('status', ['active','inactive'])->default('active');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('trade_team_id')->references('id')->on('trade_teams')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trade_team_members');
    }
}
