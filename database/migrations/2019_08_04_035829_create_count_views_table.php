<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('count_views', function (Blueprint $table) {
            $table->bigIncrements('countId');
            $table->bigInteger('countView');
            
            $table->unsignedBigInteger('cProId');
            $table->foreign('cProId')->references('cProId')->on('client_properties');
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
        Schema::dropIfExists('count_views');
    }
}
