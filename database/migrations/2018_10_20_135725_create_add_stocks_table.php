<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_stocks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); //varchar (50)
            $table->string('quantity'); //varchra (10)
            $table->string('unit_price'); //varchar(5)
            $table->string('expire_date'); //varchar(15)
            $table->string('relevent_species'); //varchar(200
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
        Schema::dropIfExists('add_stocks');
    }
}
