<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstallSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('install_schedules', function (Blueprint $table) {
            $table->bigIncrements('scheduleInstallId');


            $table->double('amountToPay', 15, 2);
            $table->double('principle', 15, 2);
            $table->double('interest', 15, 2);
            $table->double('outPrinciple', 15, 2);
            $table->double('outDebt', 15, 2);
            $table->double('receive', 15, 2);
            $table->double('penalty', 15, 2);
            $table->String('status');

            // $table->unsignedBigInteger('contractId');
            // $table->foreign('contractId')->references('contractId')->on('contracts');
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
        Schema::dropIfExists('install_schedules');
    }
}
