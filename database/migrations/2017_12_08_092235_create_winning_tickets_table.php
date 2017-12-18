<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWinningTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('winning_tickets', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lottery_id')->nullable();

            $table->timestamps();
            $table->foreign('lottery_id')->references('id')->on('lotteries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('winning_tickets');
    }
}
