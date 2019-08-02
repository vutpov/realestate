<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_details', function (Blueprint $table) {
            $table->unsignedBigInteger('bookId');
            $table->unsignedBigInteger('propertyId');
            $table->unsignedBigInteger('customerId');
            $table->timestamps();

            $table->double('price', 15, 2);
            $table->double('discount', 3, 2);
            $table->double('amount', 15, 2);

            $table->foreign('propertyId')->references('propertyId')->on('properties');
            $table->foreign('customerId')->references('customerId')->on('customers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_details');
    }
}
