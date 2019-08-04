<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScheduleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedule_details', function (Blueprint $table) {

            //ScheduleDetails(ScheduleDID, ScheduleID,.dateVisit ,TimeVisit, VisitorID, CProID , staffID, ClientID,descrption , LocationIfo ,Status)
            $table->bigIncrements('scheduleDID');
            $table->date('dateVisit');
            $table->time('timeVisit');
            $table->String('descrption');
            $table->String('locationInfo');
            $table->String('status');
            $table->timestamps();

            $table->unsignedBigInteger('scheduleId');
            $table->unsignedBigInteger('visitorId');           
            $table->unsignedBigInteger('cProID');
            $table->unsignedSmallInteger('staffID');
            $table->unsignedBigInteger('clientID');

            $table->foreign('scheduleId')->references('scheduleId')->on('schedules');
            $table->foreign('visitorId')->references('visitorId')->on('visitors');
            $table->foreign('cProID')->references('cProID')->on('client_properties');
            $table->foreign('staffID')->references('staffID')->on('staffs');
            $table->foreign('clientID')->references('clientID')->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schedule_details');
    }
}
