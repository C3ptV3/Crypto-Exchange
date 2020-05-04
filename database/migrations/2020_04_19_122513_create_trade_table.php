<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTradeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade', function (Blueprint $table) {
            $table->increments('trade_id');
            $table->timestamps();
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->string('trade_from');
            $table->string('trade_to');
            $table->double('trade_from_value',8,5);
            $table->double('trade_to_value',8,5);
            $table->double('trade_price',8,5);
            $table->unsignedBigInteger('bought_id');
            $table->binary('sold');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trade');
    }
}
