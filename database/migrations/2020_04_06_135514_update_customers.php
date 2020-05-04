<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCustomers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('customers', function (Blueprint $table) {
            $table->string('address');
            $table->string('surname');
            $table->double('USD_wallet', 8, 5);
            $table->double('BTC', 8, 2);
            $table->double('ETH', 8, 2);
            $table->decimal('phone');
            $table->string('BTC_wallet');
            $table->string('ETH_wallet');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
