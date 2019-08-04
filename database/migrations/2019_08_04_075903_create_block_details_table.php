<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlockDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('block_details', function (Blueprint $table) {
             //0=Pending, 1= Block, 2 = Unblock
            $table->unsignedBigInteger('blockId');
            $table->unsignedBigInteger('propertyId');
            $table->tinyInteger('status');

            $table->foreign('blockId')->references('blockId')->on('blocks');
            $table->foreign('propertyId')->references('propertyId')->on('properties');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('block_details');
    }
}
