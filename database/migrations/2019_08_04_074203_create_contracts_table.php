<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            //Contract(ContractId,CreatedDate,Commisson, SubTotal, Discount, deposit, Amount, Left, Status, AgentId,BookId, CustomerId, staffId)
            $table->bigIncrements('contractId');
            $table->double('discount', 15, 2);
            $table->double('subTotal', 15, 2);
            $table->double('deposit', 15, 2);
            $table->double('credit', 15, 2);
            $table->double('comission', 15, 2);
            $table->double('amount', 15, 2);
            $table->double('left', 15, 2);
            $table->String('status');
            $table->timestamps();

            $table->unsignedSmallInteger('staffId');
            $table->unsignedBigInteger('customerId');
            $table->unsignedBigInteger('bookId');
            $table->unsignedBigInteger('agencyId');

            $table->foreign('staffId')->references('staffId')->on('staffs');
            $table->foreign('customerId')->references('customerId')->on('customers');
            $table->foreign('agencyId')->references('agencyId')->on('agencies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contracts');
    }
}
