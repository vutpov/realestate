<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->bigIncrements('scheduleId');
            $table->dateTime('visitedDate');
            $table->String('location');
            $table->timestamps();

            $table->unsignedBigInteger('visitorId');
            $table->unsignedSmallInteger('staffid');
            $table->unsignedBigInteger('clientId');
            $table->unsignedBigInteger('cProId');


            $table->foreign('visitorId')->references('visitorId')->on('visitors');
            $table->foreign('staffid')->references('staffid')->on('staffs');
            $table->foreign('clientId')->references('clientId')->on('clients');
            $table->foreign('cProId')->references('cProId')->on('client_properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
