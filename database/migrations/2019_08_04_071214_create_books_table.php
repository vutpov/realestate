<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            //Book (BookId, BookDate, LimitAmount, DeadLine, TAmount, discount, SubTotal, Deposit, Credit, Commission, status, created, modified, deleted, staffId, CustomerId , AgentId,) 
            $table->bigIncrements('bookId');
            $table->double('limitAmount', 15, 2);
            $table->date('deadline');
            $table->double('discount', 15, 2);
            $table->double('subTotal', 15, 2);
            $table->double('deposit', 15, 2);
            $table->double('credit', 15, 2);
            $table->double('comission', 15, 2);
            $table->String('status');

            

            $table->unsignedSmallInteger('staffId');
            $table->unsignedBigInteger('customerId');
            $table->unsignedBigInteger('agencyId');

            $table->foreign('staffId')->references('staffId')->on('staffs');
            $table->foreign('customerId')->references('customerId')->on('customers');
            $table->foreign('agencyId')->references('agencyId')->on('agencies');
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
        Schema::dropIfExists('books');
    }
}
