<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_details', function (Blueprint $table) {
            $table->bigIncrements('invoiceDetailId');
            $table->tinyInteger('num');
            $table->double('price', 15, 2);
            $table->double('itemDiscount', 15, 2);
            $table->double('amount', 15, 2);
            $table->double('penalty', 15, 2);

            $table->bigInteger('abstractId');
            $table->text('type');

            $table->unsignedBigInteger('invoiceID');
            $table->foreign('invoiceID')->references('invoiceID')->on('invoices');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_details');
    }
}
