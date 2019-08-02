<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
            $table->smallIncrements('partnerId');
            $table->String('partner', 30);
            $table->string('address')->default('');
            $table->string('phone', 30);
            $table->string('email', 30)->unique();

            $table->timestamps();

            $table->unsignedSmallInteger('partnerTypeId');
            $table->foreign('partnerTypeId')->references('partnerTypeId')->on('partner_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('partners');
    }
}
