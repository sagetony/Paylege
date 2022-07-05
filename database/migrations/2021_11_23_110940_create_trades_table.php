<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trades', function (Blueprint $table) {
            $table->id();
            $table->string('tradeid');
            $table->string('name');
            $table->string('email');
            $table->string('originalcoin');
            $table->string('changedcoin');
            $table->string('selleramount');
            $table->string('buyeramount');
            $table->string('partneremail');
            $table->string('role');
            $table->string('status');
            $table->string('withdrawstatus');
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
        Schema::dropIfExists('trades');
    }
}
