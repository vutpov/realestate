<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agencies', function (Blueprint $table) {
            $table->bigIncrements('agencyId');
            $table->string('agency', 30);
            $table->string('address')->default('');
            $table->string('phone', 30);
            $table->string('email', 30)->unique();
            $table->double('tCOm', 10, 2);
            $table->double('paid', 10, 2);
            $table->double('amountDue', 10, 2);

            $table->tinyInteger('status')->default(1);
            $table->unsignedSmallInteger('agencyTypeId');
            $table->foreign('agencyTypeId')->references('agencyTypeId')->on('agency_types');
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
        Schema::dropIfExists('agencies');
    }
}
