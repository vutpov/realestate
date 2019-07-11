<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffs', function (Blueprint $table) {
            $table->bigIncrements('staffId');
            $table->string('Name', 30);
            $table->string('gender', 6);
            $table->date('dob');
            $table->string('address')->default('');
            $table->string('phone', 30);
            $table->string('email', 30)->unique();
            $table->string('profile')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();

            $table->unsignedSmallInteger('positionId');

            $table->foreign('positionId')->references('positionId')->on('positions');
        });

        Schema::enableForeignKeyConstraints();
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffs');
    }
}
