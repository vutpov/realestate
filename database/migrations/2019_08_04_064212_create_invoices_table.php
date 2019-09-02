<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
           
            $table->bigIncrements('invoiceId');

            $table->text('invoiceNum');
            $table->String('invoiceType');
            $table->double('tAmount', 15, 2);
            $table->double('inDiscount', 15, 2)->default(0);
            $table->double('subTotal', 15, 2);
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->unsignedSmallInteger('staffId');
            $table->unsignedBigInteger('customerId');


            $table->foreign('staffId')->references('staffId')->on('staffs');
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
        Schema::dropIfExists('invoices');
    }
}
