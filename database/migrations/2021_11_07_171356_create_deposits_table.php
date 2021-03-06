<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepositsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deposits', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->unique();
            $table->string('userID');
            $table->string('username');
            $table->string('amount');
            $table->string('coin');
            $table->string('interest');
            $table->string('plan');
            $table->string('planAmount');
            $table->string('status');
            $table->string('dayCounter');
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
        Schema::dropIfExists('deposits');
    }
}
