<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->bigIncrements('propertyId');
            $table->string('propertyCode', 10);
            $table->string('description', 30);
            $table->string('no', 5);
            $table->string('st', 20);
            $table->double('cost', 15, 2);
            $table->double('price', 15, 2);
            $table->string('free', 100);
            $table->string('location', 200);
            $table->string('unit');
            $table->tinyInteger('status');
            $table->timestamps();



            
            $table->unsignedBigInteger('projectId');
            $table->unsignedSmallInteger('partnerId');
            $table->unsignedSmallInteger('CProID');
            $table->unsignedSmallInteger('staffId');
            $table->unsignedSmallInteger('propertyTypeId');
            $table->unsignedSmallInteger('umId');
            $table->unsignedBigInteger('propAttribDetailId');

            $table->foreign('projectId')->references('projectId')->on('projects')->cascade();
            $table->foreign('partnerId')->references('partnerId')->on('partners')->cascade();
            $table->foreign('staffId')->references('staffId')->on('staffs')->cascade();
            $table->foreign('propertyTypeId')->references('propertyTypeId')->on('property_Types')->cascade();
            $table->foreign('umId')->references('umId')->on('u_m_s')->cascade();
            $table->foreign('propAttribDetailId')->references('propAttribDetailId')->on('prop_attrib_details')->cascade();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
