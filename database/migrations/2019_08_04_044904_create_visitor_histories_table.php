<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitor_histories', function (Blueprint $table) {
            $table->bigIncrements('vhId');
           
            $table->String('description');
            $table->date('dateRequest');
            $table->date('dateAproved');
            $table->String('status');
            
            $table->unsignedBigInteger('cProId');
            $table->unsignedBigInteger('visitorId');
            $table->foreign('cProId')->references('cProId')->on('client_properties');
            $table->foreign('visitorId')->references('visitorId')->on('visitors');
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
        Schema::dropIfExists('visitor_histories');
    }
}
