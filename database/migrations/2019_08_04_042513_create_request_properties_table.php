<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_properties', function (Blueprint $table) {
            $table->bigIncrements('rpId');
            $table->String('description',200);
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
        Schema::dropIfExists('request_properties');
    }
}
