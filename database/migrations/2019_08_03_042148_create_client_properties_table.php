<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientPropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_properties', function (Blueprint $table) {
            //ClientProperty (CProID, CProCode, CproDescription, No, St, Price, UMID, Free, status, PropertyTypeId, propAtrribute, LocationIfo)
            $table->bigIncrements('cProID');
          
            $table->string('cProCode', 10);
            $table->string('cProDescription', 30);
            $table->string('no', 5);
            $table->string('st', 20);
            $table->double('price', 15, 2);
            $table->string('free', 100);
            $table->string('location', 200);
            $table->tinyInteger('status');
            $table->timestamps();
           


            $table->unsignedSmallInteger('propertyTypeId');
            $table->unsignedSmallInteger('umId');
            $table->unsignedBigInteger('propAttribDetailId');


            $table->foreign('propertyTypeId')->references('propertyTypeId')->on('property_Types');
            $table->foreign('umId')->references('umId')->on('u_m_s');
            $table->foreign('propAttribDetailId')->references('propAttribDetailId')->on('prop_attrib_details');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_properties');
    }
}
