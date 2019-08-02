<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comissions', function (Blueprint $table) {
            $table->bigIncrements('comissionsId');

            $table->double('comission', 15, 2);
            $table->String('comissionType', 1);

            $table->unsignedSmallInteger('agencyId');
            $table->unsignedSmallInteger('propertyTypeId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comissions');
    }
}
