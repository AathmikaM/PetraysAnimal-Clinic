<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeriodicTreatmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodic_treatments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pets_id');
            $table->integer('pet_owners_id');
            $table->date('start_date');
            $table->date('end_date'); //varchar(15)
            $table->float('difference');
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
        Schema::dropIfExists('periodic_treatments');
    }
}
