<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgreementComDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agreement_com_details', function (Blueprint $table) {
            $table->unsignedBigInteger('aComId');
            $table->unsignedBigInteger('cProId');
            $table->double('commission', 15, 2);
            $table->tinyInteger('commissionType');
            $table->tinyInteger('status');
            $table->timestamps();

            $table->foreign('aComId')->references('aComId')->on('agreement_coms');
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
        Schema::dropIfExists('agreement_com_details');
    }
}
