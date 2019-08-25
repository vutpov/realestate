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
            $table->text('propertyCode');
            $table->string('description', 30)->nullable();
            $table->string('no', 5);
            $table->string('st', 20);
            $table->double('cost', 15, 2);
            $table->double('price', 15, 2);
            $table->string('free', 100)->nullable();
            $table->string('location', 200)->nullable();
            $table->string('unit');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            //status 1:publish



            $table->unsignedBigInteger('projectId')->nullable();
            $table->unsignedSmallInteger('partnerId')->nullable();
            $table->unsignedSmallInteger('CProID')->nullable();
            $table->unsignedSmallInteger('staffId');
            $table->unsignedSmallInteger('propertyTypeId');
            $table->unsignedSmallInteger('umId');
            $table->unsignedBigInteger('propAttribId');
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
