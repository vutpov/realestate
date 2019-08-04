<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blocks', function (Blueprint $table) {
            //0=Pending, 1= Block, 2 = Unblock
            $table->bigIncrements('blockId');
            $table->date('blockDate');
            $table->date('expriedDate');
            $table->tinyInteger('status');

            $table->unsignedSmallInteger('approveBy');
            $table->unsignedSmallInteger('createdBy');
            $table->unsignedSmallInteger('modifiedBy');
            $table->unsignedSmallInteger('deletedBy');

            $table->foreign('approveBy')->references('staffId')->on('staffs');
            $table->foreign('createdBy')->references('staffId')->on('staffs');
            $table->foreign('modifiedBy')->references('staffId')->on('staffs');
            $table->foreign('deletedBy')->references('staffId')->on('staffs');
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
        Schema::dropIfExists('blocks');
    }
}
