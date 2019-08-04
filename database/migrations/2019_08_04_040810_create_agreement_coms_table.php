<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreementComsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreement_coms', function (Blueprint $table) {
            $table->bigIncrements('aComId');

            $table->unsignedBigInteger('clientId');
            $table->unsignedsmallInteger('staffId');

            $table->foreign('staffId')->references('staffId')->on('staffs');
            $table->foreign('clientId')->references('clientId')->on('clients');
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
        Schema::dropIfExists('agreement_coms');
    }
}
